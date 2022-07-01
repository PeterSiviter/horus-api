<?php

namespace App\Service;


use App\Shapes\Shape;

class GeometryCalculator
{
    /**
     * @param Shape $shape1
     * @param Shape $shape2
     * @return float
     */
    public function sumAreas(Shape $shape1, Shape $shape2): float
    {
        return $shape1->area() + $shape2->area();
    }

    /**
     * @param Shape $shape1
     * @param Shape $shape2
     * @return float
     */
    public function sumDiameters(Shape $shape1, Shape $shape2): float
    {
        $total = 0.0;

        // Diameter is only available to shapes of type circle, so ignore any other shape.
        foreach([$shape1, $shape2] as $shape) {
            if(is_a($shape,'App\Shapes\Circle')) {
                $total += $shape->diameter();
            }
        }
        return $total;
    }
}