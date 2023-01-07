<?php

namespace App\Controller;

use App\Entity\Options;
use App\Form\OptionFormType;
use App\Form\RegistrationFormType;
use App\Repository\OptionsRepository;
use App\Security\UsersAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class   OptionsController extends AbstractController
{
    /**
     * @isGranted("ROLE_ADMIN")
     * @Route ("/options", name="app_option")
     */

    public function register(OptionsRepository $optionsRepository, Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UsersAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $option = new Options();
        $form = $this->createForm(OptionFormType::class, $option);
        $form->handleRequest($request);

        return $this->render('options/index.html.twig', [
            'optionForm' => $form->createView(),
            'options' => $optionsRepository->findBy([],
            ['gestionOrder' => 'asc'])
        ]);
    }
}
