<?php

namespace tests\Board\Builder;


use Chess\Board\Builder\BoardDirector;

class BoardDirectorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @group board
     * @group boardBuilder
     * @group boardDirector
     */
    public function testCanBuildBoard()
    {
        $boardBuilderMock = $this->getBoardBuilder();
        $boardDirector = new BoardDirector($boardBuilderMock);
        $boardDirector->build();
    }

    /**
     * @return \Chess\Board\Builder\BoardBuilder
     */
    private function getBoardBuilder()
    {
        $boardBuilderMock = $this->getMockBuilder('\Chess\Board\Builder\BoardBuilder')
            ->setMethods(['initializeBoard', 'placePiecesOnBoard', 'getBoard'])
            ->getMock();

        $boardBuilderMock->expects($this->once())
            ->method('initializeBoard');

        $boardBuilderMock->expects($this->once())
            ->method('placePiecesOnBoard');

        $boardBuilderMock->expects($this->once())
            ->method('getBoard');

        return $boardBuilderMock;
    }

}
