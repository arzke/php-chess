<?php

namespace Chess\Piece\Positioner;


use Chess\Piece\Type\Queen;
use Chess\Position\Position;

class QueenPositioner extends Positioner {

    /**
     * @param string $color
     * @return \Chess\Piece\Piece|Queen
     */
    public function getPiece($color)
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
    public function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 3)
        );
    }

}
