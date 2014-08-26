<?php

namespace Chess\Piece\Placer;


use Chess\Piece\Type\Queen;
use Chess\Position\Position;

class QueenPlacer extends Placer {

    /**
     * @param $color
     * @return \Chess\Piece\Piece|Queen
     */
    protected function getPiece($color)
    {
        return new Queen($color);
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 3)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 3)
        );
    }

}
