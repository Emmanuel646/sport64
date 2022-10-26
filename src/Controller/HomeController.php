<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Mime\Email;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route ("/anglet", name="structureAnglet")
     */
    public function pages(): Response
    {
        return $this->render('structures/structureAnglet.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @isGranted("ROLE_USER")
     * @Route ("/anglet-centre", name="structureUserAnglet1")
     */
    public function pagesUsers(): Response
    {
        return $this->render('structures/structureAnglet1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @isGranted("ROLE_USER")
     * @Route ("/anglet-pignada", name="structureUserAnglet2")
     */
    public function pagesUsers2(): Response
    {
        return $this->render('structures/structureAnglet2.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/BTZ', name: 'structureBTZ')]
    public function pagesUsersBTZ(): Response
    {
        return $this->render('structures/structureBTZ.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @isGranted("ROLE_USER")
     * @Route ("/biarritz", name="structureUserBiarritz")
     */
    public function pagesUsers3(): Response
    {
        return $this->render('structures/structureBiarritz.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     *
     * @Route ("/STJEAN", name="structureSTJEAN")
     */
    public function pagesUsersSTJEAN(): Response
    {
        return $this->render('structures/structureStJean.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @isGranted("ROLE_USER")
     * @Route ("/st-jean", name="structureUserStJean")
     */
    public function pagesUsers4(): Response
    {
        return $this->render('structures/structureStjeandeluz.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
