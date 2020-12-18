<?php

// src/Controller
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

    /**
     * @Route("/home")
     */
    public function index(){
        return $this->render('default/test/index.html.twig');
    }
}