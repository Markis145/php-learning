<?php

use PHPUnit\Framework\TestCase;

class HelloWorldWebTest extends TestCase
{
    public function testHelloWorld ()
    {
        require('../index.php');
        //$this->expectOutputString('hola mon');
        $this->assertTrue($this->have('hola mon',));
    }

    public function have($needle, $haystack) {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);

        return strpos($haystack, $needle) !== false;
    }
}

