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
        $actualOutcome = $newFence->buildFence((int)$posts, (int)$rails);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }

    public function testMatCalc()
    {
        // Setup
        $fence = 65.76;
        $newFence = new Fence();
        $expectedOutcome = 'To build this fence you will need 45 posts and 44 rails.';

        // Execution
        $actualOutcome = $newFence->calcMaterials($fence);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }

    public function testMatCalcInvalidInput()
    {
        // Setup
        $fence = '';
        $newFence = new Fence();
        $expectedOutcome = 'To use the Materials Calculator function, please enter a number value greater than 0.';

        // Execution
        $actualOutcome = $newFence->calcMaterials((float)$fence);

        // Assertions
        $this->assertEquals($expectedOutcome, $actualOutcome);

    }
}