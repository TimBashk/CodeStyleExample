<?php

include 'bootstrap.php';

$figuresFactory = new FiguresFactory();

$figures = (new SortFiguresByAreaHandler())->sort($figuresFactory->createFigures());

foreach ($figures as $figure) {
    echo $figure->getName() . ', ' . $figure->getArea() . PHP_EOL;
}
