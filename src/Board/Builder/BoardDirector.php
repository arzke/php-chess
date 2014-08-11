<?php

namespace Chess\Board\Builder;


use Chess\Piece\Placer\BishopPlacer;
use Chess\Piece\Placer\KingPlacer;
use Chess\Piece\Placer\KnightPlacer;
use Chess\Piece\Placer\PawnPlacer;
use Chess\Piece\Placer\QueenPlacer;
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
        $this->builder->place(new KnightPlacer());
        $this->builder->place(new BishopPlacer());
        $this->builder->place(new QueenPlacer());
        $this->builder->place(new KingPlacer());

        return $this->builder->getBoard();
    }
} 