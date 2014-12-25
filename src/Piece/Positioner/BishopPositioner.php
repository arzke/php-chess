<?php

namespace Chess\Piece\Positioner;


use Chess\Piece\Type\Bishop;
use Chess\Position\Position;

class BishopPositioner extends Positioner {

    /**
     * @param string $color
     * @return \Chess\Piece\Piece|Bishop
     */
    public function getPiece($color)
    {
        return new Bishop($color);
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 2),
            new Position(7, 5)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 2),
            new Position(0, 5)
        );
    }

}
