<?php

namespace Chess\Piece\Placer;


use Chess\Piece\Type\Knight;
use Chess\Position\Position;

class KnightPlacer extends Placer {

    /**
     * @param $color
     * @return \Chess\Piece\Piece|Knight
     */
    protected function getPiece($color)
    {
        return new Knight($color);
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 1),
            new Position(7, 6)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 1),
            new Position(0, 6)
        );
    }

}
