<?php

namespace Chess\Piece\Positioner;


use Chess\Position\Position;

class BishopPositions extends PiecePositions {

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
