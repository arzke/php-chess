<?php

namespace tests\Board;


use Chess\Board\Board;
use Chess\Color\Color;
use Chess\Piece\Type\Pawn;
use Chess\Position\Position;

class BoardTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @group board
     */
    public function testCanRetrievePieceAlreadySet()
    {
        $pawn = new Pawn(Color::BLACK);
        $boardArray = [[$pawn]];
        $board = new Board($boardArray);

        $this->assertSame($pawn, $board->getAt(new Position(0, 0)));
    }

    /**
     * @group board
     */
    public function testCanRetrievePieceSet()
    {
        $boardArray = [[]];
        $board = new Board($boardArray);

        $pawn = new Pawn(Color::BLACK);
        $position = new Position(0, 0);
        $board->setAt($pawn, $position);

        $this->assertSame($pawn, $board->getAt($position));
    }

}
