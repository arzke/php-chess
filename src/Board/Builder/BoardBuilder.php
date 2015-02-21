<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;
use Chess\Piece\Placer\Placer;
use Chess\Piece\Positioner\BishopPositioner;
use Chess\Piece\Positioner\KingPositioner;
use Chess\Piece\Positioner\KnightPositioner;
use Chess\Piece\Positioner\PawnPositioner;
use Chess\Piece\Positioner\QueenPositioner;
use Chess\Piece\Positioner\RookPositioner;

class BoardBuilder {

    /**
     * @var \Chess\Board\Board
     */
    private $board;

    public function initializeBoard()
    {
        $line = array_fill(0, Board::SIZE, null);
        $boardArray = array_fill(0, Board::SIZE, $line);
        $this->board = new Board($boardArray);
    }

    public function placePiecesOnBoard()
    {
        $placer = new Placer($this->board);

        $placer->place(new PawnPositioner());
        $placer->place(new BishopPositioner());
        $placer->place(new KnightPositioner());
        $placer->place(new RookPositioner());
        $placer->place(new QueenPositioner());
        $placer->place(new KingPositioner());
    }

    /**
     * @return Board
     */
    public function getBoard()
    {
        return $this->board;
    }

}
