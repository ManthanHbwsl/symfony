<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'app_movies', defaults:['name' => 'manthan'],methods : ['GET', 'HEAD'])]
    public function index($name): JsonResponse
    {
        return $this->json([
            'message' => 'current movie : ' . $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
