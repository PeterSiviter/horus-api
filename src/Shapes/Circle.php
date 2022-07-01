<?php

namespace App\Shapes;


class Circle extends Shape
{
    private float $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float|int
     */
    public function area(): float|int
    {
        return M_PI * ($this->getRadius() ^ 2);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return $this
     */
    public function setRadius(float $radius): Circle
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return float|int
     */
    public function diameter(): float|int
    {
        return 2 * $this->getRadius();
    }

    /**
     * @return float|int
     */
    public function circumference(): float|int
    {
        return M_PI * $this->diameter();
    }
}