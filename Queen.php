<?php

namespace Chess;

class Queen extends AbstractChessmen implements IChessmen
{
    public function move($x, $y)
    {
        if (($x < 1) || ($x > 8) || ($y < 1) || ($y > 8) || ($this->x == $x && $this->y == $y)) {
            throw new \Exception('Положение фигуры по оси x и y должно быть от 1 до 8  отличаться от предущего!');
        }
         if (
            $this->x == $x ||
            $this->y == $y ||
            ($this->x - $this->y) == ($x - $y) ||
            ($this->x + $this->y) == ($x + $y)
        ){
            $this->x = $x;
            $this->y = $y;
        } else {
             throw new \Exception('Королева так не ходит.');
        }
    }
}