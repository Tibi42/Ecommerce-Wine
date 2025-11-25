<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Redirige automatiquement vers la page de garde
        return $this->redirectToRoute('app_splash');
    }

    #[Route('/splash', name: 'app_splash')]
    public function splash(): Response
    {
        return $this->render('pages/splash.html.twig');
    }

    #[Route('/home', name: 'app_home_page')]
    public function home(\App\Repository\BottleRepository $bottleRepository): Response
    {
        $bottles = $bottleRepository->findAllWines();

        return $this->render('pages/home.html.twig', [
            'bottles' => $bottles,
        ]);
    }

    #[Route('/bourgogne', name: 'app_bourgogne')]
    public function bourgogne(\App\Repository\BottleRepository $bottleRepository): Response
    {
        $bottles = $bottleRepository->findByDesignation('Bourgogne');

        return $this->render('pages/bourgogne.html.twig', [
            'bottles' => $bottles,
        ]);
    }
}
