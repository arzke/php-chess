<?php

namespace Chess\Piece\Positioner;


use Chess\Piece\Type\King;
use Chess\Position\Position;

class KingPositioner extends Positioner {

    /**
     * @param string $color
     * @return \Chess\Piece\Piece|King
     */
    public function getPiece($color)
    {
        return new King($color);
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 4)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 4)
        );
    }

}
