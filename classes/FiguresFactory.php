<?php

class FiguresFactory
{
    /**
     * Список фигур
     * @return Figures[]
     */
    public function createFigures(): array
    {
        $figures = [];

        for ($i=1; $i<=10; $i++) {
            $figureType = random_int(1, 2);

            if ($figureType == 1) {
                $figures[] = new Circle('Окружность', random_int(1, 10));
            }

            if ($figureType == 2) {
                $figures[] = new Rectangle('Прямоугольник', random_int(1, 10), random_int(1, 10));
            }
        }

        return $figures;
    }
}