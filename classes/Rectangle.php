<?php

namespace App;

use App\Figures;
use http\Encoding\Stream;

class Rectangle extends Figures
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * @var float
     */
    private $area;

    /**
     * @param string $name
     * @param float $width
     * @param float $height
     */
    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        $this->area = $this->width * $this->width;
    }
}