<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="security_login")
     * @Route("/login/error", name="security_login_error")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $user = new User;

        $form = $this->createForm(UserType::class, $user);
        $form
            ->remove('confirmPassword');

        return $this->render(
            'security/login.html.twig',
            [
            'form'=>$form->createView(),
            'error' => $error
            ]
        );
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
    }
}
