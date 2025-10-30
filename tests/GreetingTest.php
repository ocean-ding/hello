<?php

use Hello\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testResponseWith1()
    {
        $greeting = new Greeting();
        $this->assertEquals('Hello!', $greeting->response(1));
    }

    public function testResponseWith2()
    {
        $greeting = new Greeting();
        $this->assertEquals('你好!', $greeting->response(2));
    }

    public function testInvalidInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        $greeting = new Greeting();
        $greeting->response(3);
    }
}