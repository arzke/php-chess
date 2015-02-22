<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class Queen extends Piece
{

    public function __construct($color)
    {
        parent::__construct(PieceType::QUEEN, $color);
    }

}
