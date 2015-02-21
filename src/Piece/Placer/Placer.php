<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;
use Chess\Piece\Positioner\PositionerInterface;

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
     * @param PositionerInterface $positioner
     * @return Placer
     */
    public function place(PositionerInterface $positioner)
    {
        foreach($positioner->getPositions() as $color => $positions) {
            foreach($positions as $position) {
                $this->board->setAt($positioner->getPiece($color), $position);
            }
        }
    }

}
