<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CurriculumController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
{
    return $this->render('curriculum.html.twig');
}
}