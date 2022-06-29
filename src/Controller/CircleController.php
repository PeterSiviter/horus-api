<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle')]
    public function index(int $radius): JsonResponse
    {
        return $this->json([
            'message' => 'Data received OK',
            'path' => 'src/Controller/CircleController.php',
            'radius' => $radius,
        ]);
    }
}
