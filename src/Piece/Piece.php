<?php

namespace Chess\Piece;


abstract class Piece
{

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $color;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $type
     * @param string $color
     */
    public function __construct($type, $color)
    {
        $this->type = $type;
        $this->color = $color;
    }

}
