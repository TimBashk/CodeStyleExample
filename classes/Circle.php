<?php

class Circle extends Figures
{
    const PI = 3.14;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    private $radius;

    /**
     * @param string $name
     * @param int $radius
     */
    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * площадь круга
     * @return int
     */
    public function getArea(): int
    {
        return round($this->radius * $this->radius * self::PI);
    }
}