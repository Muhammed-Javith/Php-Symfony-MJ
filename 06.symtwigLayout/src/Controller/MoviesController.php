<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $mymovies = ["Avengers: EndGame", "Inception","loki","FSG"];
        return $this->render('movies/index.html.twig', [
                'flims' => $mymovies
           ]);
    }
}
