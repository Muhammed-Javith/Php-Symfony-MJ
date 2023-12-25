<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->findAll();
        dd($movies);
        return $this->render('index.html.twig');
    }
    #[Route('/movies1', name: 'movies1')]
    public function index1(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Movie::class);
        $movies = $repository->findAll();
        dd($movies);
        return $this->render('index.html.twig');
    }
    private $em;
    public function __construct(EntityManagerInterface $em) 
    {
        $this->em = $em;
    }
    #[Route('/movies3', name: 'movies3')]
    public function index3(EntityManagerInterface $em): Response
    {
        //findAll -select *from table
        $repository = $em->getRepository(Movie::class);
        //$movies = $repository->find();
        //$movies = $repository->findBy([], ['id' => 'DESC']);
        //$movies = $repository->findOneBy(['id' => 3, 'title' => 'The Dark Knight'],['id' => 'DESC']);
        //$movies = $repository->count(['id' => 3]);
        $movies = $repository->getClassName();
        dd($movies);
        return $this->render('index.html.twig');
    }
}
