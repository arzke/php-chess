<?php

namespace Chess\Piece\Positioner;


use Chess\Position\Position;

class QueenPositioner extends Positioner {

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
