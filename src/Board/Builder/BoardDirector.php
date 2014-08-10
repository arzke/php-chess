<?php

namespace Chess\Board\Builder;


use Chess\Piece\Placer\PawnPlacer;

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

        return $this->builder->getBoard();
    }
} 