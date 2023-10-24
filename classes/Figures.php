<?php

abstract class Figures
{
    protected $name;


    public function getName()
    {
        return $this->name;
    }

   abstract public function getArea();
}