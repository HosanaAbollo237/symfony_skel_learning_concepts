<?php

// src/Controller
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function index(){
        return new Response(
            $content = "<h1>Hello World</h1>"
        );
    }
}