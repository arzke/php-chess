<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;
use Chess\Piece\Placer\IPlacer;

class BoardBuilder {

    /**
     * @var \Chess\Board\Board
     */
    private $board;

    /**
     * @param Board $board
     */
    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    /**
     * @param IPlacer $placer
     */
    public function place(IPlacer $placer)
    {
        $this->board = $placer->place($this->board);
    }

    /**
     * @return Board
     */
    public function getBoard()
    {
        return $this->board;
    }

} 