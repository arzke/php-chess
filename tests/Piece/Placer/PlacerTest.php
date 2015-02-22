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
     * @return \Chess\Piece\Position\PiecePositions
     */
    private function getPositioner()
    {
        $positioner = $this->getMockBuilder('\Chess\Piece\Position\PiecePositions')
            ->setMethods(['getIndexedByColor'])
            ->getMockForAbstractClass();

        $positioner->expects($this->once())
            ->method('getIndexedByColor')
            ->will($this->returnValue($this->getPositionsIndexedByColor()));

        return $positioner;
    }

    /**
     * @return array
     */
    private function getPositionsIndexedByColor()
    {
        return [
            Color::WHITE => [
                new Position(0, 0)
            ]
        ];
    }

}
