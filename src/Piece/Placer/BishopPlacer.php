<?php

namespace Chess\Piece\Placer;


use Chess\Piece\Type\Bishop;
use Chess\Position\Position;

class BishopPlacer extends Placer {

    /**
     * @param $color
     * @return \Chess\Piece\Piece|Bishop
     */
    protected function getPiece($color)
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