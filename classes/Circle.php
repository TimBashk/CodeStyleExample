<?php

namespace App;

use App\Figures;

class Circle extends Figures
{
    const PI = 3.14;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $radius;

    /**
     * @var float
     */
    private $area;

    /**
     * @param string $name
     * @param float $radius
     */
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function getArea()
    {
        $this->area = $this->radius * $this->radius * self::PI;
    }
}