<?php

namespace Chess\Piece\Position;


use Chess\Position\Position;

class KingPositions extends PiecePositions
{

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
