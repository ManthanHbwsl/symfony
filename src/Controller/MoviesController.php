<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'app_movies', defaults: ['name' => 'manthan'])]
    public function index(string $name): Response
    {
        return $this->render('index.html.twig', [
            'name' => $name
        ]);
    }
}
