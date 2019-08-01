<?php
require '../Fence.php';

use PHPUnit\Framework\TestCase;

Class FenceCalcTest extends TestCase
{
    public function testLengthCalcMoreRails()
    {
        // Setup
        $posts = 7;
        $rails = 45354;
        $expectedOutcome = 'The materials you have provided will build a fence that is 10.6m long.'

        // Execution
        $actualOutcome = buildFence($posts, $rails);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }
}