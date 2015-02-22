<?php

namespace Chess\Piece\Position;


use Chess\Position\Position;

class KnightPositions extends PiecePositions {

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getWhitePiecesPositions()
    {
        return array(
            new Position(7, 1),
            new Position(7, 6)
        );
    }

    /**
     * @return \Chess\Position\Position[]
     */
    protected function getBlackPiecesPositions()
    {
        return array(
            new Position(0, 1),
            new Position(0, 6)
        );
    }

}
