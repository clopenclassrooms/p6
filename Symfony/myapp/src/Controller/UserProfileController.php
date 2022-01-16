<?php

namespace App\Controller;

use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/modifyProfile", name="modifyProfile")
     */
    public function modifyProfile(EntityManagerInterface $entityManagerInterface, Request $request, SluggerInterface $slugger): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('homepage');
        }

        $user = $this->getUser();
        $form = $this->createForm(UserProfileType::class, $user);
        $form->add(
            'submit',
            SubmitType::class,
            [
            'label' => 'Mettre à jour mon profile',
        ]
        );

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $imgFile = $form['img']->getData();
            if ($imgFile) {
                $originalFilename = pathinfo($imgFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imgFile->guessExtension();
                $imgFile->move(
                    $this->getParameter('img_directory'),
                    $newFilename
                );
                
                $user->setPhoto('/uploads/img/' . $newFilename);
            }

            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('modifyProfile');
        }

        return $this->render(
            'user_profile/modifyProfile.html.twig',
            [
            'form' => $form->createView(),
        ]
        );
    }
}
