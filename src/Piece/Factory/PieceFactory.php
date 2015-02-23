<?php

namespace Chess\Piece\Factory;


use Chess\Piece\Type\TypeToClassMapper;

class PieceFactory
{

    /**
     * @param $pieceType
     * @param $color
     * @return \Chess\Piece\Piece
     */
    public function getPiece($pieceType, $color)
    {
        $typeToClassMapper = new TypeToClassMapper();
        $className = $typeToClassMapper->getClassName($pieceType);
        if ($className) {
            return new $className($color);
        }

        throw new \InvalidArgumentException("Can not build piece of unknown type: $pieceType");
    }

}
