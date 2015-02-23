<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;
use Chess\Piece\Factory\PieceFactory;
use Chess\Piece\Position\PiecePositions;
use Chess\Piece\Type\TypeToClassMapper;

class Placer
{

    /**
     * @var Board
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
     * @param PiecePositions $piecePositions
     * @param string $pieceType
     * @return Placer
     */
    public function place(PiecePositions $piecePositions, $pieceType)
    {
        $pieceFactory = new PieceFactory(new TypeToClassMapper());
        foreach ($piecePositions->getIndexedByColor() as $color => $positions) {
            foreach ($positions as $position) {
                $this->board->setAt($pieceFactory->getPiece($pieceType, $color), $position);
            }
        }
    }

}
