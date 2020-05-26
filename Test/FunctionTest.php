<?php

use \PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        require 'functions.php';

        // first: expected output; second: the input
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(5,3));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));
    }
}