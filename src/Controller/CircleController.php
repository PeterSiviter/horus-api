<?php

namespace App\Controller;

use App\Shapes\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle')]
    public function index(int $radius): JsonResponse
    {
        $c = new Circle($radius);

        return $this->json([
            'type2' => 'circle',
            'radius' => $c->getRadius(),
            'diameter' => $c->diameter(),
            'surface' => $c->area(),
            'circumference' => $c->circumference()
        ]);
    }
}
