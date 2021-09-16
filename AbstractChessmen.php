<?php

namespace Chess;

abstract class AbstractChessmen implements IChessmen
{
    protected $x, $y;

    public function __construct($x, $y)
    {
        if ($x>8 || $y>8 || $x < 1 || $y < 1) {
            throw new \Exception('Положение фигуры по оси x и y должно быть от 1 до 8!');
        }
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition()
    {
        return "x: $this->x y: $this->y <br>";
    }
}