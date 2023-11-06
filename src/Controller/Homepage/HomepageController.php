<?php

namespace App\Controller\Homepage;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController{

    #[Route('/', name: 'homepage', methods: ['GET', 'POST'])]
    public function index(){

        return $this->render('homepage/homepage.html.twig', [

        ]);
    }
}