<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Trick;
use App\Entity\Video;
use App\Entity\TrickGroup;
use App\Entity\Illustration;
use Doctrine\Persistence\ObjectManager;
use App\Repository\TrickGroupRepository;
use App\Repository\TrickRepository;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TrickFixtures extends Fixture
{
    private $_encoder;
    private $_trickGroupRepository;
    private $_trickRepository;
    private $_userRepository;

    public function __construct(UserRepository $userRepository, TrickRepository $trickRepository, TrickGroupRepository $trickGroupRepository, UserPasswordEncoderInterface $encoder)
    {
        $this->_encoder = $encoder;
        $this->_trickGroupRepository = $trickGroupRepository;
        $this->_trickRepository = $trickRepository;
        $this->_userRepository = $userRepository;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        
        //create users
        //user test
        $user = new User();
        $email = "test"; //while be use for create the password
        $user->setUsername("test")
                ->setName("test")
                ->setEmail("test@test.test")
                ->setIsVerified(true)
                ->setPassword($this->_encoder->encodePassword($user, "test@test.test"))
                ->setPhoto('/uploads/img/1.jpg');
        $manager->persist($user);

        //other users
        $NB_USERS = 9;
        for ($i=0;$i < $NB_USERS;$i++) {
            $user = new User();
            $email = $faker->email(); //while be use for create the password
            $user->setUsername($faker->userName())
                ->setName($faker->name())
                ->setEmail($email)
                ->setIsVerified(true)
                ->setPassword($this->_encoder->encodePassword($user, $email))
                ->setPhoto('/uploads/img/' . $i . '.jpg');
            $manager->persist($user);
        }
        $manager->flush();
        
        // Groupes
        $GROUPES = ['Grabs', 'Rotations', 'Flips', 'Rotations désaxées', 'Slides', 'One foot', 'Old school'];
        foreach ($GROUPES as $groupeName) {
            $groupe = new TrickGroup();
            $groupe->setName($groupeName);
            $manager->persist($groupe);
        }
        $manager->flush();

        // Tricks
        $trick = new Trick;
        $slugger = new AsciiSlugger();
        $illustration = new Illustration();
        $video = new Video();
        $VideoUrlStart = '<iframe src="https://www.youtube.com/embed/';
        $VideoUrlEnd = '" title="YouTube video player" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>';

        // Mute
        
        $trick = new Trick;
        $trick->setName('Mute')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Saisie de la carre frontside de la planche entre les deux pieds avec la main avant.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Grabs')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'Mute1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'Mute2.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'JGaZ_qctLvA'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // Indy
        $trick = new Trick;
        $trick->setName('Indy')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Grabs')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'Indy1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'Indy2.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . '6yA3XqjTh_w'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // Nose grab
        $trick = new Trick;
        $trick->setName('Nose grab')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Saisie de la partie avant de la planche, avec la main avant.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Grabs')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'nosegrab1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'nosegrab2.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'gZFWW4Vus-Q'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);

        // Stalefish
        $trick = new Trick;
        $trick->setName('Stalefish')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Saisie de la carre backside de la planche entre les deux pieds avec la main arrière.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Grabs')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'stalefish1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'f9FjhCt_w2U'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // Tail grab
        $trick = new Trick;
        $trick->setName('Tail grab')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Saisie de la partie arrière de la planche, avec la main arrière.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Grabs')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'tailgrab1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . '_Qq-YoXwNQY'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // 180
        $trick = new Trick;
        $trick->setName('180')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Un 180 désigne un demi-tour, soit 180 degrés d\'angle .')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Rotations')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  '1801.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'JMS2PGAFMcE'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();
        
        // 360
        $trick = new Trick;
        $trick->setName('360')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Un 360, trois six pour un tour complet.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Rotations')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  '3601.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . '9T5AWWDxYM4'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // flip
        $trick = new Trick;
        $trick->setName('flip')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription('Un flip est une rotation verticale. On distingue les front flips, rotations en avant, et les back flips, rotations en arrière.
            Il est possible de faire plusieurs flips à la suite, et d\'ajouter un grab à la rotation.
            Les flips agrémentés d\'une vrille existent aussi (Mac Twist, Hakon Flip...), mais de manière beaucoup plus rare, et se confondent souvent avec certaines rotations horizontales désaxées.
            Néanmoins, en dépit de la difficulté technique relative d\'une telle figure, le danger de retomber sur la tête ou la nuque est réel et conduit certaines stations de ski à interdire de telles figures dans ses snowparks.')
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Flips')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'flip1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'eGJ8keB1-JM'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // front flips
        $trick = new Trick;
        $trick->setName('front flips')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription(
                'Un flip est une rotation verticale. On distingue les front flips, rotations en avant, et les back flips, rotations en arrière.
            Il est possible de faire plusieurs flips à la suite, et d\'ajouter un grab à la rotation.
            Les flips agrémentés d\'une vrille existent aussi (Mac Twist, Hakon Flip...), mais de manière beaucoup plus rare, et se confondent souvent avec certaines rotations horizontales désaxées.
            Néanmoins, en dépit de la difficulté technique relative d\'une telle figure, le danger de retomber sur la tête ou la nuque est réel et conduit certaines stations de ski à interdire de telles figures dans ses snowparks.'
            )
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Flips')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'frontflips1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . 'eGJ8keB1-JM'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();

        // Nose slide
        $trick = new Trick;
        $trick->setName('Nose slide')
            ->setCreatedAt($faker->dateTime('now'))
            ->setDescription(
                'Un slide consiste à glisser sur une barre de slide. Le slide se fait soit avec la planche dans l\'axe de la barre, soit perpendiculaire, soit plus ou moins désaxé.
            On peut slider avec la planche centrée par rapport à la barre (celle-ci se situe approximativement au-dessous des pieds du rideur), mais aussi en nose slide, c\'est-à-dire l\'avant de la planche sur la barre, ou en tail slide, l\'arrière de la planche sur la barre.'
            )
            ->setSlug($slugger->slug($trick->getName()))
            ->setTrickGroup($this->_trickGroupRepository->findOneBy(array('name' => 'Slides')))
            ;
        $illustration = new Illustration;
        $illustration->setFileName('/uploads/img/' .  'slide1.jpg')
            ->setTrick($trick);
        $trick->addIllustration($illustration);
        $video = new Video;
        $video->setUrl($VideoUrlStart . '5q2ivIXJx3U'. $VideoUrlEnd)
            ->setTrick($trick);
        $manager->persist($trick);
        $manager->persist($video);
        $manager->flush();


        $NB_COMMENTAIRES = 100;
        $allTricks = $this->_trickRepository->findAll();
        $allUser = $this->_userRepository->findAll();
        for ($i=0; $i < $NB_COMMENTAIRES; $i++) {
            $user = $faker->randomElements($allUser)[0];
            $trick = $faker->randomElements($allTricks)[0];
            $comment = new Comment;
            $comment->setUser($user);
            $comment->setTrick($trick);
            $comment->setComment($faker->text(100));
            $comment->setCreateAt($faker->dateTime());
            $manager->persist($comment);
            $manager->flush();
        }
    }
}
