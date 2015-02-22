<?php

namespace Chess\Piece\Factory;


use Chess\Piece\Type\Bishop;
use Chess\Piece\Type\King;
use Chess\Piece\Type\Knight;
use Chess\Piece\Type\Pawn;
use Chess\Piece\Type\PieceType;
use Chess\Piece\Type\Queen;
use Chess\Piece\Type\Rook;

class PieceFactory
{

    /**
     * @param $pieceType
     * @param $color
     * @return \Chess\Piece\Piece
     */
    public function getPiece($pieceType, $color)
    {
        if ($pieceType === PieceType::PAWN) {
            return new Pawn($color);
        }
        if ($pieceType === PieceType::BISHOP) {
            return new Bishop($color);
        }
        if ($pieceType === PieceType::KNIGHT) {
            return new Knight($color);
        }
        if ($pieceType === PieceType::ROOK) {
            return new Rook($color);
        }
        if ($pieceType === PieceType::QUEEN) {
            return new Queen($color);
        }
        if ($pieceType === PieceType::KING) {
            return new King($color);
        }

        throw new \InvalidArgumentException("Can not build piece of unknown type: $pieceType");
    }

}
