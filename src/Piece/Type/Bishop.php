<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class Bishop extends Piece
{

    public function __construct($color)
    {
        parent::__construct(PieceType::BISHOP, $color);
    }

}
