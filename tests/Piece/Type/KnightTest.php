<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\Knight;
use Chess\Piece\Type\PieceType;
use PHPUnit_Framework_TestCase;

class KnightTest extends PHPUnit_Framework_TestCase
{

    /**
     * @group knight
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $knight = new Knight(null);

        $this->assertSame(PieceType::KNIGHT, $knight->getType());
        $this->assertSame(null, $knight->getColor());
    }

    /**
     * @group knight
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $knight = new Knight(Color::BLACK);

        $this->assertSame(PieceType::KNIGHT, $knight->getType());
        $this->assertSame(Color::BLACK, $knight->getColor());
    }

}
