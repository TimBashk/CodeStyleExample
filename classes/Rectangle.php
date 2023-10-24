<?php

class Rectangle extends Figures
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @param string $name
     * @param int $width
     * @param int $height
     */
    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * площадь прямоугольника
     * @return int
     */
    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}