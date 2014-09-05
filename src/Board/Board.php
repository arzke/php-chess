<?php

namespace Chess\Board;


use Chess\Piece\Piece;
use Chess\Position\Checker\PositionChecker;
use Chess\Position\Position;

class Board {

    const SIZE = 8;

    private $board = array();

    /**
     * @param array $board
     */
    public function setBoard(array $board)
    {
        $this->board = $board;
    }

    /**
     * @param Piece $piece
     * @param Position $position
     * @return bool
     * @throws \OutOfRangeException
     */
    public function setAt(Piece $piece, Position $position)
    {
        $this->getSquare($position)->setPiece($piece);
    }

    /**
     * @param Position $position
     * @return \Chess\Board\Square
     * @throws \OutOfRangeException
     */
    public function getSquare(Position $position)
    {
        $positionChecker = new PositionChecker();
        if($positionChecker->isValid($this->board, $position)) {
            return $this->board[$position->getX()][$position->getY()];
        }
        throw new \OutOfRangeException('The given coordinates are out of range.');
    }

}
