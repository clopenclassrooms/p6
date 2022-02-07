<?php

namespace App\Controller;

use DateTime;
use App\Entity\Trick;
use App\Entity\Video;
use App\Entity\Comment;
use App\Form\TrickType;
use App\Form\VideoType;
use App\Form\CommentType;
use App\Entity\Illustration;
use App\Repository\GroupRepository;
use App\Repository\TrickRepository;
use App\Repository\TrickGroupRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use phpDocumentor\Reflection\DocBlock\Description;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class TrickController extends AbstractController
{
    /**
     * @Route("/trick/add", name="addTrick")
     */
    public function addTrick(TrickRepository $trickRepository, Request $request, TrickGroupRepository $trickGroupRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }

        $trickGroups = $trickGroupRepository->findAll();
        $trick = new Trick;
        $form = $this->createForm(TrickType::class, $trick);
        $form->add(
            'submit',
            SubmitType::class,
            [
            'label' => 'Rajouter le trick'
            ]
        );
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $trickRepository->addTrick(
                $trick,
                $form,
                $this->getParameter('img_directory'),
                $entityManagerInterface
            );
            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'trick/addTrick.html.twig',
            [
            'form' => $form->createView(),
            'trick' => $trick,
            'trickGroups' => $trickGroups
            ]
        );
    }
    /**
     * @Route("/trick/modify/{slug}", name="modifyTrick")
     */
    public function modifyTrick($slug, SluggerInterface $slugger, TrickGroupRepository $trickGroupRepository, Request $request, EntityManagerInterface $entityManagerInterface, TrickRepository $trickRepository): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }

        $trickGroups = $trickGroupRepository->findAll();
        $trick = $trickRepository->findBy(['slug' => $slug])[0];
        $form = $this->createForm(TrickType::class, $trick);
        $form->add(
            'submit',
            SubmitType::class,
            [
            'label' => 'Mettre à jour le trick',
        ]
        );
     
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setModifyAt(new DateTime());
            $slugger = new AsciiSlugger();
            $trick->setSlug($slugger->slug($trick->getName()));
            
            for ($i = 0;$i < count($form['illustrations']);$i++) {
                if (isset($form['illustrations'][$i])) {
                    $imgFile = $form['illustrations'][$i]['img']->getData();
                    if ($imgFile and !is_null($imgFile)) {
                        $originalFilename = pathinfo($imgFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = $slugger->slug($originalFilename);
                        $newFilename = $safeFilename.'-'.uniqid().'.'.$imgFile->guessExtension();
                        // Move the file to the directory where brochures are stored
                        $imgFile->move(
                            $this->getParameter('img_directory'),
                            $newFilename
                        );
                        $trick->getIllustrations()[$i]->setFileName('/uploads/img/' . $newFilename);
                    }
                }
            }

            $illustrations = $trick->getIllustrations();
            for ($i = 0;$i < count($illustrations);$i++) {
                if ($illustrations[$i]->getFileName() == null) {
                    unset($illustrations[$i]);
                }
            }
        
            $entityManagerInterface->persist($trick);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'trick/modifyTrick.html.twig',
            [
                'form' => $form->createView(),
                'trick' => $trick,
                'trickGroups' => $trickGroups
            ]
        );
    }
    /**
     * @Route("/trick/delete/{slug}", name="deleteTrick")
     */
    public function deleteTrick($slug, TrickRepository $trickRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }
        
        $trick = $trickRepository->findBy(['slug' => $slug])[0];
        $trickName = $trick->getName();
        $entityManagerInterface->remove($trick);
        $entityManagerInterface->flush();

        return $this->render(
            'trick/deleteTrick.html.twig',
            [
            'trickName' => $trickName,
        ]
        );
    }
    /**
     * @Route("/", name="homepage")
     * @Route("/trick/displayAllTricks", name="displayAllTricks")
     */
    public function displayAllTricks(TrickRepository $trickRepository): Response
    {
        $tricks = $trickRepository->findAll();
        return $this->render(
            'trick/displayAllTricks.html.twig',
            [
            'tricks' => $tricks,
        ]
        );
    }
    /**
     * @Route("/trick/displayTrick/{slug}", name="displayTrick")
     *
     */
    public function displayTrick($slug, EntityManagerInterface $entityManagerInterface, Request $request, TrickRepository $trickRepository): Response
    {
        $trick = $trickRepository->findBy(['slug' => $slug])[0];

        $comment = new Comment;
        $formComment = $this->createForm(CommentType::class, $comment);
        $formComment->add(
            'submit',
            SubmitType::class,
            [
            'label' => 'Ajouter un commentaire'
            ]
        );

        $formComment->handleRequest($request);

        if ($formComment->isSubmitted() && $formComment->isValid()) {
            $comment
            ->setCreateAt(new DateTime())
            ->setUser($this->getUser())
            ->setTrick($trick)
            ;
            $entityManagerInterface->persist($comment);
            $entityManagerInterface->flush();
        }

        return $this->render(
            'trick/displayTrick.html.twig',
            [
            'trick' => $trick,
            'formComment' => $formComment->createView()
        ]
        );
    }

    /**
     *
     * @Route("/trick/loadMoreComments/{idTrick}/{start}", name="loadMoreComments")
     */
    public function loadMoreComments(TrickRepository $trickRepository, $idTrick, $start = 10)
    {
        $trick = $trickRepository->find((int)$idTrick);

        return $this->render(
            'trick/loadMoreComments.html.twig',
            [
            'trick' => $trick,
            'start' => $start
        ]
        );
    }

    /**
     *
     * @Route("/trick/loadMoreTricks/{start}", name="loadMoreTricks")
     */
    public function loadMoreTricks(TrickRepository $trickRepository, $start = 5)
    {
        $tricks = $trickRepository->findAll();

        return $this->render(
            'trick/loadMoreTricks.html.twig',
            [
            'tricks' => $tricks,
            'start' => $start
        ]
        );
    }
}
