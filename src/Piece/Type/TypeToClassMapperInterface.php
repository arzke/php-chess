<?php

namespace Chess\Piece\Type;


interface TypeToClassMapperInterface
{

    /**
     * @param string $pieceType
     * @return string
     */
    public function getClassName($pieceType);

}
