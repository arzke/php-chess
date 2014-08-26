<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class Pawn extends Piece {

    public function __construct($color)
    {
        parent::__construct(PieceType::PAWN, $color);
    }

}
