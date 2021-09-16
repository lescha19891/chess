<?php

namespace Chess;

use Exception;

require_once "IChessmen.php";
require_once "AbstractChessmen.php";
require_once "King.php";
require_once "Queen.php";

try {

    $king = new King(4, 3);
    echo "Начальная позиция короля: " . $king->getPosition();
    $queen = new Queen(1, 1);
    echo "Начальная позиция королевы: " . $queen->getPosition();
    $king->move(3, 2);
    echo $king->getPosition();
    $king->move(2, 2);
    echo "Итоговая позиция короля: " . $king->getPosition();
    $queen->move(7, 1);
    echo $queen->getPosition();
    $queen->move(7, 3);
    echo "Итоговая позиция королевы: " . $queen->getPosition();
} catch( \Exception $e ) {
    echo $e->getMessage();
}


