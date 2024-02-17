<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    #[Route('/Utilisateurs', name: 'app_utilisateurs')]
    public function Utilisateurs(): Response
    {
        return $this->render('dashboard/users.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/Communauté', name: 'app_community')]
    public function Community(): Response
    {
        return $this->render('dashboard/community.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/Assurances', name: 'app_assurances')]
    public function Assurances(): Response
    {
        return $this->render('dashboard/assurances.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/Assistance', name: 'app_assistance')]
    public function Assistance(): Response
    {
        return $this->render('dashboard/assistance.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/SOS', name: 'app_sos')]
    public function SOS(): Response
    {
        return $this->render('dashboard/sos.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
