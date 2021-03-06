<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneratorController extends AbstractController
{
    /**
     * @Route("/generator", name="app_generator")
     */
    public function index(): Response
    {
        return $this->render('generator.html.twig', [
            'controller_name' => 'GeneratorController',
        ]);
    }
}
