<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;
use Chess\Piece\Placer\Placer;
use Chess\Piece\Position\BishopPositions;
use Chess\Piece\Position\KingPositions;
use Chess\Piece\Position\KnightPositions;
use Chess\Piece\Position\PawnPositions;
use Chess\Piece\Position\QueenPositions;
use Chess\Piece\Position\RookPositions;
use Chess\Piece\Type\PieceType;

class BoardBuilder
{

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

        $placer->place(new PawnPositions(), PieceType::PAWN);
        $placer->place(new BishopPositions(), PieceType::BISHOP);
        $placer->place(new KnightPositions(), PieceType::KNIGHT);
        $placer->place(new RookPositions(), PieceType::ROOK);
        $placer->place(new QueenPositions(), PieceType::QUEEN);
        $placer->place(new KingPositions(), PieceType::KING);
    }

    /**
     * @return Board
     */
    public function getBoard()
    {
        return $this->board;
    }

}
