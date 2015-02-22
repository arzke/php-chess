<?php

namespace tests\Board\Builder;


use Chess\Board\Board;
use Chess\Board\Builder\BoardBuilder;
use Chess\Color\Color;
use Chess\Piece\Type\Bishop;
use Chess\Piece\Type\King;
use Chess\Piece\Type\Knight;
use Chess\Piece\Type\Pawn;
use Chess\Piece\Type\Queen;
use Chess\Piece\Type\Rook;

class BoardBuilderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var BoardBuilder
     */
    private $boardBuilder;

    protected function setUp()
    {
        $this->boardBuilder = new BoardBuilder();
    }

    /**
     * @group board
     * @group boardBuilder
     */
    public function testCanInitializeBoard()
    {
        $this->boardBuilder->initializeBoard();
        $this->assertEquals(new Board($this->getEmptyBoard()), $this->boardBuilder->getBoard());
    }

    /**
     * @return array
     */
    private function getEmptyBoard()
    {
        return [
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
        ];
    }

    /**
     * @group board
     * @group boardBuilder
     */
    public function testCanPlacePiecesOnBoard()
    {
        $this->boardBuilder->initializeBoard();
        $this->boardBuilder->placePiecesOnBoard();
        $this->assertEquals(new Board($this->getBoardWithPiecesPlaced()), $this->boardBuilder->getBoard());
    }

    /**
     * @return array
     */
    private function getBoardWithPiecesPlaced()
    {
        return [
            [
                new Rook(Color::BLACK),
                new Knight(Color::BLACK),
                new Bishop(Color::BLACK),
                new Queen(Color::BLACK),
                new King(Color::BLACK),
                new Bishop(Color::BLACK),
                new Knight(Color::BLACK),
                new Rook(Color::BLACK)
            ],
            [
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK),
                new Pawn(Color::BLACK)
            ],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [null, null, null, null, null, null, null, null],
            [
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE),
                new Pawn(Color::WHITE)
            ],
            [
                new Rook(Color::WHITE),
                new Knight(Color::WHITE),
                new Bishop(Color::WHITE),
                new Queen(Color::WHITE),
                new King(Color::WHITE),
                new Bishop(Color::WHITE),
                new Knight(Color::WHITE),
                new Rook(Color::WHITE)
            ]
        ];
    }

}
