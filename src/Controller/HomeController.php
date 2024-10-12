<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

  #[Route("/", name: "home", methods:['GET'])]
  public function index(Request $request): Response
  {
    //dd($request);
    $response = new Response();
    $response->headers->set("Content-Type", 'text/html');
    $response->setContent("<h1>Hello World</h1>");
    return $response;
  }

}
