<?php
require 'index.php';
use PHPUnit\Framework\TestCase;
class AreTheyTheSameTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $a1 = [121, 144, 19, 161, 19, 144, 19, 11];
        $a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
        $this->revTest(comp($a1, $a2), true);
        $a1 = [121, 144, 19, 161, 19, 144, 19, 11];
        $a2 = [11*21, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];
        $this->revTest(comp($a1, $a2), false);
    }
}