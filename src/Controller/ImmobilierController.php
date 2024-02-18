<?php

namespace App\Controller;

use App\Entity\Immobilier;
use App\Form\ImmobilierType;
use App\Repository\ImmobilierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/immobilier')]
class ImmobilierController extends AbstractController
{
    #[Route('/', name: 'app_immobilier_index', methods: ['GET'])]
    public function index(ImmobilierRepository $immobilierRepository): Response
    {
        return $this->render('immobilier/index.html.twig', [
            'immobiliers' => $immobilierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_immobilier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $immobilier = new Immobilier();
        $form = $this->createForm(ImmobilierType::class, $immobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($immobilier);
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('immobilier/new.html.twig', [
            'immobilier' => $immobilier,
            'form' => $form,
        ]);
    }

    #[Route('/{id_fiscal}', name: 'app_immobilier_show', methods: ['GET'])]
    public function show(Immobilier $immobilier): Response
    {
        return $this->render('immobilier/show.html.twig', [
            'immobilier' => $immobilier,
        ]);
    }

    #[Route('/{id_fiscal}/edit', name: 'app_immobilier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Immobilier $immobilier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImmobilierType::class, $immobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('immobilier/edit.html.twig', [
            'immobilier' => $immobilier,
            'form' => $form,
        ]);
    }

    #[Route('/{id_fiscal}', name: 'app_immobilier_delete', methods: ['POST'])]
    public function delete(Request $request, Immobilier $immobilier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$immobilier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($immobilier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_immobilier_index', [], Response::HTTP_SEE_OTHER);
    }
}
