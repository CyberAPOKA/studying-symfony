<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoronavirusController extends AbstractController
{
    /**
     * @Route("/coronavirus", name="app_coronavirus")
     */
    public function index(): Response
    {
        return $this->render('coronavirus.html.twig', [
            'controller_name' => 'CoronavirusController',
        ]);
    }
}
