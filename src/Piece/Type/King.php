<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class King extends Piece {

    public function __construct($color)
    {
        parent::__construct(PieceType::KING, $color);
    }

}
