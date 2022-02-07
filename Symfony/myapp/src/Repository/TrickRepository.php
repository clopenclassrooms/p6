<?php

namespace App\Repository;

use DateTime;
use App\Entity\Trick;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Trick|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trick|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trick[]    findAll()
 * @method Trick[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrickRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trick::class);
    }

    public function addTrick(Trick $trick, FormInterface $form, $img_directory, EntityManagerInterface $entityManagerInterface)
    {
        $trick->setCreatedAt(new DateTime());
        $slugger = new AsciiSlugger();
        $trick->setSlug($slugger->slug($trick->getName()));
        $trick = $this->addUploadingImg($trick, $form, $img_directory);
        $trick = $this->nullsValuesCorrector($trick, $form);
        $this->persitAndFlush($entityManagerInterface, $trick);
    }
    public function addUploadingImg(Trick $trick, FormInterface $form, $img_directory)
    {
        $slugger = new AsciiSlugger();
        for ($i = 0;$i < count($form['illustrations']);$i++) {
            if (isset($form['illustrations'][$i])) {
                $imgFile = $form['illustrations'][$i]['img']->getData();
                if ($imgFile and !is_null($imgFile)) {
                    $originalFilename = pathinfo($imgFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imgFile->guessExtension();
                    $imgFile->move(
                        $img_directory,
                        $newFilename
                    );
                    $trick->getIllustrations()[$i]->setFileName('/uploads/img/' . $newFilename);
                }
            }
        }
        return $trick;
    }
    public function nullsValuesCorrector(Trick $trick, FormInterface $form)
    {
        if ($trick->getTrickGroup()->getName() == null) {
            $trick->setTrickGroup(null);
        }
        foreach ($trick->getVideos() as $video) {
            if ($video->getUrl() == null) {
                $trick->removeVideo($video);
            } else {
                $video->setTrick($trick);
            }
        }
        $illustrations = $trick->getIllustrations();
        for ($i = 0;$i < count($illustrations);$i++) {
            if ($illustrations[$i]->getFileName() == null) {
                unset($illustrations[$i]);
            }
        }
        return $trick;
    }
    public function persitAndFlush(EntityManagerInterface $entityManagerInterface, Trick $trick)
    {
        $entityManagerInterface->persist($trick);
        $entityManagerInterface->flush();
    }
}
