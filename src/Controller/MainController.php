<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('40diasdejejum/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/single", name="single")
     */
    public function single()
    {
        return $this->render('40diasdejejum/single.html.twig', );
    }
}
