<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\PieceType;
use Chess\Piece\Type\Queen;
use PHPUnit_Framework_TestCase;

class QueenTest extends PHPUnit_Framework_TestCase
{

    /**
     * @group queen
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $queen = new Queen(null);

        $this->assertSame(PieceType::QUEEN, $queen->getType());
        $this->assertSame(null, $queen->getColor());
    }

    /**
     * @group queen
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $queen = new Queen(Color::BLACK);

        $this->assertSame(PieceType::QUEEN, $queen->getType());
        $this->assertSame(Color::BLACK, $queen->getColor());
    }
}
