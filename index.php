<?php

require "vendor/autoload.php";

$boardBuilder = new \Chess\Board\Builder\BoardBuilder();
$boardDirector = new \Chess\Board\Builder\BoardDirector($boardBuilder);

$chessBoard = $boardDirector->build();
