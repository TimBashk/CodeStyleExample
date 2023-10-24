<?php

interface SortHandlerInterface
{
    /**
     * @var Figures[] $figures
     */
    public function sort(array $figures): array;
}