<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class Knight extends Piece {

    public function __construct($color)
    {
        parent::__construct(PieceType::KNIGHT, $color);
    }

}
