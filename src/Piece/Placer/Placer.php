<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;
use Chess\Color\Color;
use Chess\Piece\Piece;

abstract class Placer implements PlacerInterface {

    /**
     * @var array
     */
    protected $positions = array();

    /**
     * @param $color
     * @return Piece
     */
    abstract protected function getPiece($color);

    /**
     * @return \Chess\Position\Position[]
     */
    abstract protected function getWhitePiecesPositions();

    /**
     * @return \Chess\Position\Position[]
     */
    abstract protected function getBlackPiecesPositions();

    public function __construct()
    {
        $this->initPositions();
    }

    private function initPositions()
    {
        $this->positions = array(
            Color::WHITE => $this->getWhitePiecesPositions(),
            Color::BLACK => $this->getBlackPiecesPositions()
        );
    }

    /**
     * @param Board $board
     * @return Board
     */
    public function place(Board $board)
    {
        foreach($this->positions as $color => $positions) {
            foreach($positions as $position) {
                $board->setAt($this->getPiece($color), $position);
            }
        }

        return $board;
    }

}
