<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\PieceType;
use Chess\Piece\Type\Rook;
use PHPUnit_Framework_TestCase;

class RookTest extends PHPUnit_Framework_TestCase {

    /**
     * @group rook
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $rook = new Rook(null);

        $this->assertSame(PieceType::ROOK, $rook->getType());
        $this->assertSame(null, $rook->getColor());
    }

    /**
     * @group rook
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $rook = new Rook(Color::BLACK);

        $this->assertSame(PieceType::ROOK, $rook->getType());
        $this->assertSame(Color::BLACK, $rook->getColor());
    }

}
