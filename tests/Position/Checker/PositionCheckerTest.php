<?php

namespace tests\Position\Checker;


use Chess\Position\Checker\PositionChecker;
use Chess\Position\Position;

class PositionCheckerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @group position
     * @group positionChecker
     */
    public function testIsInvalidForEmptyBoard()
    {
        $this->assertFalse((new PositionChecker())->isValid($this->getEmptyBoard(), new Position(0, 0)));
    }

    /**
     * @group position
     * @group positionChecker
     */
    public function testIsInvalidForEmptyBoardWithEmptyRow()
    {
        $this->assertFalse((new PositionChecker())->isValid($this->getEmptyBoardWithEmptyRow(), new Position(0, 0)));
    }

    /**
     * @group position
     * @group positionChecker
     */
    public function testIsInvalidWithOutOfRangePosition()
    {
        $this->assertFalse((new PositionChecker())->isValid($this->getOneSquareBoard(), new Position(0, 1)));
    }

    /**
     * @group position
     * @group positionChecker
     */
    public function testIsValidOnExistingPosition()
    {
        $this->assertTrue((new PositionChecker())->isValid($this->getOneSquareBoard(), new Position(0, 0)));
    }

    /**
     * @return array
     */
    private function getEmptyBoard()
    {
        return array();
    }

    /**
     * @return array
     */
    private function getEmptyBoardWithEmptyRow()
    {
        return array(array());
    }

    /**
     * @return array
     */
    private function getOneSquareBoard()
    {
        return array(array(null));
    }

}
