<?php

namespace Chess\Piece\Factory;


use Chess\Piece\Type\TypeToClassMapper;
use Chess\Piece\Type\TypeToClassMapperInterface;

class PieceFactory
{

    /**
     * @var TypeToClassMapper
     */
    private $typeToClassMapper;

    /**
     * @param TypeToClassMapperInterface $typeToClassMapper
     */
    public function __construct(TypeToClassMapperInterface $typeToClassMapper)
    {
        $this->typeToClassMapper = $typeToClassMapper;
    }

    /**
     * @param $pieceType
     * @param $color
     * @return \Chess\Piece\Piece
     */
    public function getPiece($pieceType, $color)
    {
        $className = $this->typeToClassMapper->getClassName($pieceType);
        if ($className) {
            return new $className($color);
        }

        throw new \InvalidArgumentException("Can not build piece of unknown type: $pieceType");
    }

}
