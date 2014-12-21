<?php

namespace tests\Piece;


use Chess\Color\Color;
use Chess\Piece\Type\PieceType;
use PHPUnit_Framework_TestCase;

class PieceTest extends PHPUnit_Framework_TestCase {

    /**
     * @group piece
     */
    public function testInstantiateWithNullValues() {
        $piece = $this->getPieceMock(null, null);

        $this->assertSame(null, $piece->getType());
        $this->assertSame(null, $piece->getColor());
    }

    /**
     * @group piece
     */
    public function testTypeIsSetByConstructor() {
        $piece = $this->getPieceMock(PieceType::KING, null);

        $this->assertSame(PieceType::KING, $piece->getType());
        $this->assertSame(null, $piece->getColor());
    }

    /**
     * @group piece
     */
    public function testColorIsSetByConstructor() {
        $piece = $this->getPieceMock(null, Color::BLACK);

        $this->assertSame(null, $piece->getType());
        $this->assertSame(Color::BLACK, $piece->getColor());
    }

    /**
     * @param String $type
     * @param String $color
     * @return \PHPUnit_Framework_MockObject_MockObject
     * @group piece
     */
    private function getPieceMock($type, $color)
    {
        $pieceMock = $this->getMockBuilder('\Chess\Piece\Piece')
            ->setConstructorArgs(array($type, $color))
            ->setMethods(null)
            ->getMockForAbstractClass();

        return $pieceMock;
    }
}
