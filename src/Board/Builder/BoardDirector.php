<?php

namespace Chess\Board\Builder;


use Chess\Piece\Placer\PawnPlacer;
use Chess\Piece\Placer\RookPlacer;

class BoardDirector {

    /**
     * @var BoardBuilder
     */
    private $builder;

    /**
     * @param BoardBuilder $builder
     */
    public function __construct(BoardBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return \Chess\Board\Board
     */
    public function build()
    {
        $this->builder->place(new PawnPlacer());
        $this->builder->place(new RookPlacer());

        return $this->builder->getBoard();
    }
} 