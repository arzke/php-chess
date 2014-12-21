<?php

namespace tests\Position;


use Chess\Position\Position;

class PositionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @group position
     */
    public function testInstantiateWithNullValues()
    {
        $this->setExpectedException('\InvalidArgumentException');
        new Position(null, null);
    }

    /**
     * @group position
     */
    public function testInstantiateWithNullXValue()
    {
        $this->setExpectedException('\InvalidArgumentException');
        new Position(null, 0);
    }

    /**
     * @group position
     */
    public function testInstantiateWithNullYValue()
    {
        $this->setExpectedException('\InvalidArgumentException');
        new Position(0, null);
    }

    /**
     * @group position
     */
    public function testInstantiateWithZeroValues()
    {
        $position = new Position(0, 0);
        $this->assertSame(0, $position->getX());
        $this->assertSame(0, $position->getY());
    }
}
