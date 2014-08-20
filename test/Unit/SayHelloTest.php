<?php

class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public static function testMustBeEqual()
    {
		$a = new SayHello();
		return $this->assertEquals('Hello World, Composer!',$a->world());
    }
}