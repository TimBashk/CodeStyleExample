<?php

include 'bootstrap.php';
//include 'classes/Figures.php';
//include 'classes/Circle.php';
//include 'classes/Rectangle.php';
//include 'classes/FiguresFactory.php';
//include 'classes/SortFiguresByAreaHandler.php';

$figuresFactory = new FiguresFactory();

$figures = (new SortFiguresByAreaHandler())->sort($figuresFactory->createFigures());

foreach ($figures as $figure) {
    echo $figure->getName() . ', ' . $figure->getArea() . PHP_EOL;
}
