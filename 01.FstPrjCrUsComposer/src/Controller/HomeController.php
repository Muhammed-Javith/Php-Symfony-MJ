<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function index(): Response
    {
        return new Response('Hello!');
    }
    #[Route('/hello', methods: ['GET'])]
    public function simple1(): Response
    {
     return new Response("Hello World");
    }
    #[Route('/hello/{name}', methods: ['GET'])]
       public function simple2(string $name): Response
       {
        return new Response("Hello $name!");
       }
}
?>