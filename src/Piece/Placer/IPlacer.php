<?php

namespace Chess\Piece\Placer;


use Chess\Board\Board;

interface IPlacer {

    public function place(Board $board);

} 