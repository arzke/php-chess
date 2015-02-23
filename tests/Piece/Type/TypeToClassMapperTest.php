<?php

namespace tests\Piece\Type;


use Chess\Piece\Type\PieceType;
use Chess\Piece\Type\TypeToClassMapper;

class TypeToClassMapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TypeToClassMapper
     */
    private static $typeToClassMapper;

    public static function setUpBeforeClass()
    {
        self::$typeToClassMapper = new TypeToClassMapper();
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsPawnClassNameWhenPieceTypeIsPawn()
    {
        $this->assertSame('\Chess\Piece\Type\Pawn', self::$typeToClassMapper->getClassName(PieceType::PAWN));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsBishopClassNameWhenPieceTypeIsBishop()
    {
        $this->assertSame('\Chess\Piece\Type\Bishop', self::$typeToClassMapper->getClassName(PieceType::BISHOP));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsKnightClassNameWhenPieceTypeIsKnight()
    {
        $this->assertSame('\Chess\Piece\Type\Knight', self::$typeToClassMapper->getClassName(PieceType::KNIGHT));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsRookClassNameWhenPieceTypeIsRook()
    {
        $this->assertSame('\Chess\Piece\Type\Rook', self::$typeToClassMapper->getClassName(PieceType::ROOK));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsQueenClassNameWhenPieceTypeIsQueen()
    {
        $this->assertSame('\Chess\Piece\Type\Queen', self::$typeToClassMapper->getClassName(PieceType::QUEEN));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testReturnsKingClassNameWhenPieceTypeIsKing()
    {
        $this->assertSame('\Chess\Piece\Type\King', self::$typeToClassMapper->getClassName(PieceType::KING));
    }

    /**
     * @group piece
     * @group pieceType
     * @group mapper
     */
    public function testExceptionIsThrownWhenUnknownPieceTypeIsGiven()
    {
        $this->setExpectedException('\InvalidArgumentException');
        self::$typeToClassMapper->getClassName('foo');
    }

}
