<?php

namespace Chess\Piece\Type;


class TypeToClassMapper
{

    /**
     * @param $pieceType
     * @return mixed
     */
    public function getClassName($pieceType)
    {
        if ($this->hasInMapping($pieceType)) {
            return $this->getMapping()[$pieceType];
        }

        throw new \InvalidArgumentException("No class name mapping for piece type $pieceType");
    }


    /**
     * @param $pieceType
     * @return bool
     */
    private function hasInMapping($pieceType)
    {
        return array_key_exists($pieceType, $this->getMapping());
    }

    /**
     * @return array
     */
    private function getMapping()
    {
        return [
            PieceType::PAWN => '\Chess\Piece\Type\Pawn',
            PieceType::BISHOP => '\Chess\Piece\Type\Bishop',
            PieceType::KNIGHT => '\Chess\Piece\Type\Knight',
            PieceType::ROOK => '\Chess\Piece\Type\Rook',
            PieceType::QUEEN => '\Chess\Piece\Type\Queen',
            PieceType::KING => '\Chess\Piece\Type\King',
        ];
    }

}
