<?php

namespace tests\Piece\Placer;


use Chess\Board\Board;
use Chess\Color\Color;
use Chess\Piece\Placer\Placer;
use Chess\Piece\Type\King;
use Chess\Piece\Type\PieceType;
use Chess\Position\Position;
use PHPUnit_Framework_TestCase;

class PlacerTest extends PHPUnit_Framework_TestCase {

    /**
     * @group placer
     */
    public function testPlace()
    {
        $board = $this->getBoard();
        $placer = new Placer($board);
        $placer->place($this->getPositioner(), PieceType::KING);

        $this->assertEquals(new King(Color::WHITE), $board->getAt(new Position(0, 0)));
    }

    /**
     * @return Board
     */
    private function getBoard()
    {
        $line = array_fill(0, 8, null);
        $boardArray = array_fill(0, 8, $line);
        $board = new Board($boardArray);

        return $board;
    }

    /**
     * @return \Chess\Piece\Positioner\PiecePositions
     */
    private function getPositioner()
    {
        $positioner = $this->getMockBuilder('\Chess\Piece\Positioner\PiecePositions')
            ->setMethods(['getPositions'])
            ->getMockForAbstractClass();

        $positioner->expects($this->once())
            ->method('getPositions')
            ->will($this->returnValue($this->getPositions()));

        return $positioner;
    }

    /**
     * @return array
     */
    private function getPositions()
    {
        return [
            Color::WHITE => [
                new Position(0, 0)
            ]
        ];
    }

}
