<?php

// src/Controller
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

    /**
     * @Route("/home", name="home")
     */
    public function index(){
        return new Response(
            $content = "<h1>Hello World</h1>"
        );
    }
}