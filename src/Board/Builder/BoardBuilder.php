<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;
use Chess\Piece\Placer\PlacerInterface;

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
     * @param PlacerInterface $placer
     */
    public function place(PlacerInterface $placer)
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
