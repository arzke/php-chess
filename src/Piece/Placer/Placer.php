<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;
use Chess\Piece\Positioner\Positioner;

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
     * @param Positioner $positioner
     * @return Placer
     */
    public function place(Positioner $positioner)
    {
        foreach($positioner->getPositions() as $color => $positions) {
            foreach($positions as $position) {
                $this->board->setAt($positioner->getPiece($color), $position);
            }
        }
    }

}
