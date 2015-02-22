<?php

namespace Chess\Piece\Position;


use Chess\Position\Position;

class PawnPositions extends PiecePositions
{

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(6, 0),
            new Position(6, 1),
            new Position(6, 2),
            new Position(6, 3),
            new Position(6, 4),
            new Position(6, 5),
            new Position(6, 6),
            new Position(6, 7)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(1, 0),
            new Position(1, 1),
            new Position(1, 2),
            new Position(1, 3),
            new Position(1, 4),
            new Position(1, 5),
            new Position(1, 6),
            new Position(1, 7)
        );
    }

}
