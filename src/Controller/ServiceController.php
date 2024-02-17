<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/accueil', name: 'index')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('service/about.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/offres', name: 'offres')]
    public function offres(): Response
    {
        return $this->render('service/offres.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/assistance', name: 'assistance')]
    public function assistance(): Response
    {
        return $this->render('service/assistance.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('service/services.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/community', name: 'community')]
    public function community(): Response
    {
        return $this->render('service/community.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('service/login.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/inscription', name: 'inscription')]
    public function inscription(): Response
    {
        return $this->render('service/inscription.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/ajouter_un_bien', name: 'ajouter_un_bien')]
    public function ajouter_un_bien(): Response
    {
        return $this->render('service/ajouter_un_bien.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
}
