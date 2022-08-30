<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_login')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/anglet-1', name: 'structureAnglet1')]
    public function structure1(): Response
    {
        return $this->render('admin/structureAnglet1.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/anglet-2', name: 'structureAnglet2')]
    public function structure2(): Response
    {
        return $this->render('admin/structureAnglet2.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/biarritz', name: 'structureBiarritz')]
    public function structure3(): Response
    {
        return $this->render('admin/structureBiarritz.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/st-jean', name: 'structureStJean')]
    public function structure4(): Response
    {
        return $this->render('admin/structureStJean.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
