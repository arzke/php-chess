<?php

namespace Chess\Position\Checker;


use Chess\Position\Position;

class PositionChecker {

    /**
     * @param Position $position
     * @param int $maxValue
     * @return bool
     */
    public function isValid(Position $position, $maxValue)
    {
        $isXValid = $position->getX() >= 0 && $position->getX() < $maxValue;
        $isYValid = $position->getY() >= 0 && $position->getY() < $maxValue;
        return $isXValid && $isYValid;
    }
} 