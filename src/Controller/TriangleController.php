<?php

namespace App\Controller;

use App\Shapes\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    /**
     * @param $a
     * @param $b
     * @param $c
     * @return JsonResponse
     */
    #[Route('/triangle/{a}/{b}/{c}', name: 'app_triangle')]
    public function index($a, $b, $c): JsonResponse
    {
        $t = new Triangle($a, $b, $c);
        return $this->json([
            'type' => 'triangle',
            'a' => $t->getA(),
            'b' => $t->getB(),
            'c' => $t->getC(),
            'surface' => $t->area(),
            'circumference(perimiter)' => $t->circumference(),
        ]);
    }
}
