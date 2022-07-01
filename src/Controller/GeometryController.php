<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use App\Shapes\Circle;
use App\Shapes\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GeometryController extends AbstractController
{
    public $geometryCalculator;

    /**
     * @param GeometryCalculator $g
     */
    public function __construct(GeometryCalculator $g)
    {
        $this->geometryCalculator = $g;
    }

    /**
     * @param float $radius
     * @param float $a
     * @param float $b
     * @param float $c
     * @return JsonResponse
     */
    #[Route('/geometry/circle/triangle/{radius}/{a}/{b}/{c}', name: 'app_geometry')]
    public function index(float $radius, float $a, float $b, float $c): JsonResponse
    {
        $circle = new Circle($radius);
        $triangle = new Triangle($a, $b, $c);

        $totalArea = $this->geometryCalculator->sumAreas($circle, $triangle);
        $totalDiameter = $this->geometryCalculator->sumDiameters($circle, $triangle);

        return $this->json([
            'type1' => 'circle',
            'type2' => 'triangle',
            'area' => $totalArea,
            'diameter' => $totalDiameter,
        ]);
    }
}
