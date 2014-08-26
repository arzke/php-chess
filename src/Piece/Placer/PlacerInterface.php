<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;

interface PlacerInterface {

    public function place(Board $board);

}
