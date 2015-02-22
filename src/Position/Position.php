<?php

namespace Chess\Position;


class Position
{

    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @param int $x
     * @param int $y
     * @throws \InvalidArgumentException
     */
    public function __construct($x, $y)
    {
        if (!is_int($x) || !is_int($y)) {
            throw new \InvalidArgumentException('Coordinates must be integer values.');
        }

        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

}
