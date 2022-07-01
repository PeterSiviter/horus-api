<?php

namespace App\Shapes;

use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{

    public function testArea()
    {
        $t = new Triangle(2,3,4);
        $this->assertEqualsWithDelta('2.905', $t->area(), 0.001);
    }
}
