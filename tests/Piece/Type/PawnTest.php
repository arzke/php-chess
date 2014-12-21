<?php

namespace tests\Piece\Type;


use Chess\Color\Color;
use Chess\Piece\Type\Pawn;
use Chess\Piece\Type\PieceType;

class PawnTest extends \PHPUnit_Framework_TestCase {

    /**
     * @group pawn
     * @group piece
     */
    public function testInstantiateWithNullColor()
    {
        $pawn = new Pawn(null);

        $this->assertSame(PieceType::PAWN, $pawn->getType());
        $this->assertSame(null, $pawn->getColor());
    }

    /**
     * @group pawn
     * @group piece
     */
    public function testInstantiateWithColor()
    {
        $pawn = new Pawn(Color::BLACK);

        $this->assertSame(PieceType::PAWN, $pawn->getType());
        $this->assertSame(Color::BLACK, $pawn->getColor());
    }
}
