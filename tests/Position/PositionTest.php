<?php

namespace tests\Position;


use Chess\Position\Position;

class PositionTest extends \PHPUnit_Framework_TestCase {

    /**
     * Tests the instantiation of the class with null values
     * @group position
     */
    public function testInstantiateWithNullValues()
    {
        $this->setExpectedException('\InvalidArgumentException');
        new Position(null, null);
    }
}
