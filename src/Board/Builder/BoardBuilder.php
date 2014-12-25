<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;

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

    public function initBoard()
    {
        $line = array_fill(0, Board::SIZE, null);
        $this->board->setBoard(array_fill(0, Board::SIZE, $line));
    }

    /**
     * @param $placer
     */
    public function place($placer)
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
