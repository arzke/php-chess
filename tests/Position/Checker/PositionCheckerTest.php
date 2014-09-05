<?php

namespace tests\Position\Checker;


use Chess\Position\Checker\PositionChecker;
use Chess\Position\Position;

class PositionCheckerTest extends \PHPUnit_Framework_TestCase {

    /**
     * Tests that position is invalid with an empty board
     * @group position
     * @group positionChecker
     */
    public function testIsInvalidForEmptyBoard()
    {
        $this->assertFalse((new PositionChecker())->isValid(array(), new Position(0, 0)));
    }
}
