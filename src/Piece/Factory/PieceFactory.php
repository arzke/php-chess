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
            $piece = new Pawn($color);
        } elseif ($pieceType === PieceType::BISHOP) {
            $piece = new Bishop($color);
        } elseif ($pieceType === PieceType::KNIGHT) {
            $piece = new Knight($color);
        } elseif ($pieceType === PieceType::ROOK) {
            $piece = new Rook($color);
        } elseif ($pieceType === PieceType::QUEEN) {
            $piece = new Queen($color);
        } elseif ($pieceType === PieceType::KING) {
            $piece = new King($color);
        } else {
            throw new \InvalidArgumentException("Can not build piece of unknown type: $pieceType");
        }

        return $piece;
    }

}
