<?php

namespace App\Controller;

use App\Entity\TechUser;
use App\Form\FormConnectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/formulaire', name: 'app_form')]
    public function index(Request $request): Response
    {
        $techuser = new TechUser();

        $form = $this->createForm(FormConnectType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            dd($techuser);
        }

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
