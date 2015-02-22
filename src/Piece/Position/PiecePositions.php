<?php

namespace Chess\Piece\Position;


use Chess\Color\Color;

abstract class PiecePositions {

    /**
     * @return \Chess\Position\Position[]
     */
    abstract protected function getWhitePiecesPositions();

    /**
     * @return \Chess\Position\Position[]
     */
    abstract protected function getBlackPiecesPositions();

    /**
     * @return array
     */
    public function getIndexedByColor()
    {
        return array(
            Color::WHITE => $this->getWhitePiecesPositions(),
            Color::BLACK => $this->getBlackPiecesPositions()
        );
    }

}
