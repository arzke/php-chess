<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\King;
use Chess\Piece\Type\PieceType;
use PHPUnit_Framework_TestCase;

class KingTest extends PHPUnit_Framework_TestCase
{

    /**
     * @group king
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $king = new King(null);

        $this->assertSame(PieceType::KING, $king->getType());
        $this->assertSame(null, $king->getColor());
    }

    /**
     * @group king
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $king = new King(Color::BLACK);

        $this->assertSame(PieceType::KING, $king->getType());
        $this->assertSame(Color::BLACK, $king->getColor());
    }

}
