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
use Chess\Piece\Type\PieceType;

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

        $placer->place(new PawnPositioner(), PieceType::PAWN);
        $placer->place(new BishopPositioner(), PieceType::BISHOP);
        $placer->place(new KnightPositioner(), PieceType::KNIGHT);
        $placer->place(new RookPositioner(), PieceType::ROOK);
        $placer->place(new QueenPositioner(), PieceType::QUEEN);
        $placer->place(new KingPositioner(), PieceType::KING);
    }

    /**
     * @return Board
     */
    public function getBoard()
    {
        return $this->board;
    }

}
