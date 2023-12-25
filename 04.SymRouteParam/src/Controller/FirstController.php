<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
    //uri with parameters
    #[Route('/second/{name}', name: 'app_second',methods:['GET'])]
    public function second(string $name): JsonResponse
    {
        return $this->json([
            'message' => $name,
            'path' =>'src/Controller/FirstController.php',
        ]);
    }
    //uri with default value paramters passed
   #[Route('/third/{name}', name: 'app_third', defaults: ['name' => 'null'], methods:['GET'])]
   public function third($name): JsonResponse
   {
    return $this->json([
       'message' => $name,
        'path' =>'src/Controller/FirstController.php',
    ]);
   }
}

