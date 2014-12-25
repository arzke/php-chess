<?php

namespace Chess\Piece\Positioner;


use Chess\Color\Color;

abstract class Positioner implements PositionerInterface {

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
    public function getPositions()
    {
        return array(
            Color::WHITE => $this->getWhitePiecesPositions(),
            Color::BLACK => $this->getBlackPiecesPositions()
        );
    }

}
