<?php


//This variant working on Ubuntu server
/*
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
*/

//This variant working on Windows10 xampp


class SampleTest extends \PHPUnit_Framework_TestCase
{
    // public function setUp(){
    //   var_dump("test function ".__FUNCTION__);
    // }
    
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
	    $this->assertTrue(true);
    }
    public function testQwerty()
    {
        $this->assertFalse(false);
    }
}

