<?php

namespace Chess\Board;


class Board {

    const SIZE = 8;

    private $board = array();

    public function __construct()
    {
        $line = array_fill(0, self::SIZE, new Square());
        $this->board = array_fill(0, self::SIZE, $line);
    }

}