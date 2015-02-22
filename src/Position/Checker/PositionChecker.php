<?php

namespace Chess\Position\Checker;


use Chess\Position\Position;

class PositionChecker
{

    /**
     * @param array $board
     * @param Position $position
     * @return bool
     */
    public function isValid(array $board, Position $position)
    {
        if (array_key_exists($position->getX(), $board)) {
            return array_key_exists($position->getY(), $board[$position->getX()]);
        }
        return false;
    }

}
