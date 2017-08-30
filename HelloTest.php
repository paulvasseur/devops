<?php

use PHPUnit\Framework\TestCase;

Class HelloTest extends TestCase {

    public function testCase1()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));
    }
}