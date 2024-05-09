<?php

use PHPUnit\Framework\TestCase;

require_once '../src/Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->subtract(4, 2));
    }
}
