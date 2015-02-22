<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;
use Chess\Piece\Factory\PieceFactory;
use Chess\Piece\Positioner\PiecePositions;

class Placer {

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
     * @param PiecePositions $positioner
     * @param string $pieceType
     * @return Placer
     */
    public function place(PiecePositions $positioner, $pieceType)
    {
        $pieceFactory = new PieceFactory();
        foreach($positioner->getIndexedByColor() as $color => $positions) {
            foreach($positions as $position) {
                $this->board->setAt($pieceFactory->getPiece($pieceType, $color), $position);
            }
        }
    }

}
