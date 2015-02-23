<?php

namespace tests\Piece\Factory;


use Chess\Color\Color;
use Chess\Piece\Factory\PieceFactory;
use Chess\Piece\Type\Bishop;
use Chess\Piece\Type\King;
use Chess\Piece\Type\Knight;
use Chess\Piece\Type\Pawn;
use Chess\Piece\Type\PieceType;
use Chess\Piece\Type\Queen;
use Chess\Piece\Type\Rook;

class PieceFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var PieceFactory
     */
    private static $pieceFactory;

    public static function setUpBeforeClass()
    {
        self::$pieceFactory = new PieceFactory(new TypeToClassMapper());
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreatePawn()
    {
        $this->assertEquals(new Pawn(Color::WHITE), self::$pieceFactory->getPiece(PieceType::PAWN, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreateBishop()
    {
        $this->assertEquals(new Bishop(Color::WHITE), self::$pieceFactory->getPiece(PieceType::BISHOP, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreateKnight()
    {
        $this->assertEquals(new Knight(Color::WHITE), self::$pieceFactory->getPiece(PieceType::KNIGHT, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreateRook()
    {
        $this->assertEquals(new Rook(Color::WHITE), self::$pieceFactory->getPiece(PieceType::ROOK, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreateQueen()
    {
        $this->assertEquals(new Queen(Color::WHITE), self::$pieceFactory->getPiece(PieceType::QUEEN, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testCanCreateKing()
    {
        $this->assertEquals(new King(Color::WHITE), self::$pieceFactory->getPiece(PieceType::KING, Color::WHITE));
    }

    /**
     * @group piece
     * @group pieceFactory
     */
    public function testExceptionIsThrownWhenTryingToCreateUnknownTypeOfPiece()
    {
        $this->setExpectedException('\InvalidArgumentException');
        self::$pieceFactory->getPiece('unknown', Color::WHITE);
    }

}
