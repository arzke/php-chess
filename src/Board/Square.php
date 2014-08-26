<?php

namespace Chess\Board;


use Chess\Piece\Piece;

class Square {

    /**
     * @var \Chess\Piece\Piece
     */
    private $piece;

    /**
     * @param Piece $piece
     */
    public function setPiece(Piece $piece){
        $this->piece = $piece;
    }

    /**
     * @return Piece
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * @return bool
     */
    public function isEmpty() {
        return $this->piece === null;
    }
}
