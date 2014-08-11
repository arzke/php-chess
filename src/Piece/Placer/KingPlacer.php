<?php

namespace Chess\Piece\Placer;


use Chess\Piece\Type\King;
use Chess\Position\Position;

class KingPlacer extends Placer {

    /**
     * @param $color
     * @return \Chess\Piece\Piece|King
     */
    protected function getPiece($color)
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