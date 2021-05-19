<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }

    public function testSubtract() {
        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15, $result);
    }

    public function testMultiply() {
        $calculator = new App\Calculator;
        $result = $calculator->multiply(10,5);

        $this->assertEquals(50, $result);
    }

    public function testDivide() {
        $calculator = new App\Calculator;
        $result = $calculator->divide(100,5);

        $this->assertEquals(20, $result);
    }

    public function testPercentage() {
        $calculator = new App\Calculator;
        $result = $calculator->percentage(40,2500);

        $this->assertEquals(1000, $result);
    }
}