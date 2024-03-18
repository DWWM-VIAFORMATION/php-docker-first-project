<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function test_1()
    {
        $this->assertSame(1, 1);
    }

    public function test_2()
    {
        $this->assertSame(1, 2);
    }
}
