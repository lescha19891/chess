<?php

namespace Chess;
interface IChessmen
{
    public function getPosition();
    public function move($x,$y);
}
