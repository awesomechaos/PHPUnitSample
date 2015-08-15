<?php

namespace Sample\Tests;

use Sample\Sample;
use Sample\Tests\SampleTestCase;

class SampleTest extends SampleTestCase
{
    public function testGet()
    {
        $sample = new Sample();
        $this->assertEquals(5,$sample->get('a'));
        $this->assertEquals(6,$sample->get('b'));
    }
    
    public function testSet()
    {
        $sample = new Sample();
        $sample->set(1);
        $this->assertEquals(1,$sample->get('a'));
    }
    
}
?>