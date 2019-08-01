<?php
require_once '../Fence.php';

use PHPUnit\Framework\TestCase;

Class FenceCalcTest extends TestCase
{
    public function testLengthCalcMoreRails()
    {
        // Setup
        $posts = 7;
        $rails = 45354;
        $newFence = new Fence();
        $expectedOutcome = 'The materials you have provided will build a fence that is 10.6m long.';

        // Execution
        $actualOutcome = $newFence->buildFence($posts, $rails);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }

    public function testLengthCalcMorePosts()
    {
        // Setup
        $posts = 765;
        $rails = 46;
        $newFence = new Fence();
        $expectedOutcome = 'The materials you have provided will build a fence that is 69.1m long.';

        // Execution
        $actualOutcome = $newFence->buildFence($posts, $rails);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }

    public function testLengthCalcInvalidInput()
    {
        // Setup
        $posts = 'XX';
        $rails = '';
        $newFence = new Fence();
        $expectedOutcome = 'To use the Fence Length Calculator function, please enter number values greater than 0.';

        // Execution
        $actualOutcome = $newFence->buildFence($posts, $rails);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }
}