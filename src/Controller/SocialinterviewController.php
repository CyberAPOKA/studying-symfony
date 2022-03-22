<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocialinterviewController extends AbstractController
{
    /**
     * @Route("/socialinterview", name="app_socialinterview")
     */
    public function index()
    {
        return $this->render('socialinterview.html.twig');
    }
}
