<?php

namespace Chess\Board\Builder;


class BoardDirector {

    /**
     * @var BoardBuilder
     */
    private $boardBuilder;

    /**
     * @param BoardBuilder $boardBuilder
     */
    public function __construct(BoardBuilder $boardBuilder)
    {
        $this->boardBuilder = $boardBuilder;
    }

    /**
     * @return \Chess\Board\Board
     */
    public function build()
    {
        $this->boardBuilder->initializeBoard();
        $this->boardBuilder->placePiecesOnBoard();

        return $this->boardBuilder->getBoard();
    }

}
