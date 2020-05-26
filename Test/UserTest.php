<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * Runnable having "test" term in the method name
     */
    public function testReturnsFullName()
    {
        require 'User.php';
        $user = new User;
        $user->first_name = 'Rosiliza';
        $user->surname = 'Rioja';

        $this->assertEquals('Rosiliza Rioja', $user->getFullName());
    }

    /**
     * Not runnable due to missing "test" term at the method name
     */
    public function fullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * Runnable due to docblock "@test"
     * 
     * @test
     */
    public function full_name_is_empty_by_default()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * Runnable having "test" term in the method name
     */
    public function test_full_name_is_empty_by_default()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }
}