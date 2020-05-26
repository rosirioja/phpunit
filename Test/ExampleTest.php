<?php

use \PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwoResultsInFour()
    {
        // first: expected output; second: the input
        $this->assertEquals(5, 2+2);
    }
}