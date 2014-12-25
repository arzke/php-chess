<?php

namespace Chess\Piece\Positioner;


interface PositionerInterface {

    /**
     * @param string $color
     * @return \Chess\Piece\Piece
     */
    public function getPiece($color);

    /**
     * @return array
     */
    public function getPositions();

}
