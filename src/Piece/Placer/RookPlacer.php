<?php

namespace Chess\Piece\Placer;


use Chess\Piece\Type\Rook;
use Chess\Position\Position;

class RookPlacer extends Placer {

    /**
     * @param $color
     * @return \Chess\Piece\Piece|Rook
     */
    protected function getPiece($color)
    {
        return new Rook($color);
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 0),
            new Position(7, 7)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 0),
            new Position(0, 7)
        );
    }

}
