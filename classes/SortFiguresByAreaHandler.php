<?php

class SortFiguresByAreaHandler implements SortHandlerInterface
{
    /**
     * @var Figures[] $figures
     */
    public function sort(array $figures): array
    {
        usort($figures, function($figure1, $figure2)
        {
            return $figure1->getArea() < $figure2->getArea();
        });

        return $figures;
    }
}