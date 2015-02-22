<?php

namespace Chess\Piece\Positioner;


use Chess\Position\Position;

class RookPositioner extends Positioner {

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
