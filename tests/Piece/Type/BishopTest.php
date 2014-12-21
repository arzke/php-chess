<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\Bishop;
use Chess\Piece\Type\PieceType;
use PHPUnit_Framework_TestCase;

class BishopTest extends PHPUnit_Framework_TestCase {

    /**
     * @group bishop
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $bishop = new Bishop(null);

        $this->assertSame(PieceType::BISHOP, $bishop->getType());
        $this->assertSame(null, $bishop->getColor());
    }

    /**
     * @group bishop
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $bishop = new Bishop(Color::BLACK);

        $this->assertSame(PieceType::BISHOP, $bishop->getType());
        $this->assertSame(Color::BLACK, $bishop->getColor());
    }

}
