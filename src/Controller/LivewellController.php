<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivewellController extends AbstractController
{
    /**
     * @Route("/livewell", name="app_livewell")
     */
    public function index(): Response
    {
        return $this->render('live-well.html.twig', [
            'controller_name' => 'LivewellController',
        ]);
    }
}
