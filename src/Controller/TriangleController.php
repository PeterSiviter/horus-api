<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{depth}/{width}/{height}', name: 'app_triangle')]
    public function index($depth, $width, $height): JsonResponse
    {
        return $this->json([
            'message' => 'Data received OK',
            'path' => 'src/Controller/TriangleController.php',
            '$depth' => $depth,
            '$width' => $width,
            '$height' => $height,
        ]);
    }
}
