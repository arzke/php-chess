<?php

namespace Chess\Piece\Factory;


use Chess\Piece\Type\TypeToClassMapper;

class PieceFactory
{

    /**
     * @var TypeToClassMapper
     */
    private $typeToClassMapper;

    /**
     * @param TypeToClassMapper $typeToClassMapper
     */
    public function __construct(TypeToClassMapper $typeToClassMapper)
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
