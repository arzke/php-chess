<?php

namespace Chess\Piece\Position;


use Chess\Position\Position;

class RookPositions extends PiecePositions
{

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
