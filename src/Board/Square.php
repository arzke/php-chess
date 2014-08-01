<?php

namespace Chess\Board;


class Square {

    /**
     * @var \Chess\Piece\Piece
     */
    private $piece;

    /**
     * @return bool
     */
    public function isEmpty() {
        return $this->piece === null;
    }
} 