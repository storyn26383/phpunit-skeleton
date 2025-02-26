<?php

namespace Sasaya\Tests;

use Sasaya\Example;

class ExampleTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals('world', (new Example)->hello());
    }
}
