<?php

namespace App\Shapes;

class Triangle extends Shape
{

    public float $a = 0;
    public float $b = 0;
    public float $c = 0;

    public function __construct(float $a, float $b, float $c)
    {
        $this
            ->setA($a)
            ->setB($b)
            ->setC($c);
    }

    /**
     * @return float
     */
    public function area()
    {
        $s = ($this->getA() + $this->getB() + $this->getC()) / 2;
        return sqrt($s * ($s - $this->getA()) * ($s - $this->getB()) * ($s - $this->getC()));
    }

    /**
     * @return float|int
     */
    public function circumference(): float|int
    {
        return $this->getA() + $this->getB() + $this->getC();
    }

    /**
     * @return float|int
     */
    public function getA(): float|int
    {
        return $this->a;
    }

    /**
     * @param float|int $a
     * @return Triangle
     */
    public function setA(float|int $a): Triangle
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getB(): float|int
    {
        return $this->b;
    }

    /**
     * @param float|int $b
     * @return Triangle
     */
    public function setB(float|int $b): Triangle
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getC(): float|int
    {
        return $this->c;
    }

    /**
     * @param float|int $c
     * @return Triangle
     */
    public function setC(float|int $c): Triangle
    {
        $this->c = $c;
        return $this;
    }


}