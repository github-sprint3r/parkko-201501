<?php

class SplitMoneyTest extends PHPUnit_Framework_TestCase {

    private $splitMoney;

    public function setUp() {
         $this->splitMoney = new SplitMoney();
    }

    public function testSplit10ReturnOne10() {
        $expectedBank[500] = 0;
        $expectedBank[100] = 0;
        $expectedBank[50] = 0;
        $expectedBank[20] = 0;
        $expectedBank[10] = 1;
        
        $bankReturn = $this->splitMoney->split(10);

        $this->assertEquals($expectedBank, $bankReturn);
    }

    public function testSplit30ReturnOne20One10() {
        $expectedBank[500] = 0;
        $expectedBank[100] = 0;
        $expectedBank[50] = 0;
        $expectedBank[20] = 1;
        $expectedBank[10] = 1;
        
        $bankReturn = $this->splitMoney->split(30);

        $this->assertEquals($expectedBank, $bankReturn);
    }

    public function testSplit50ReturnOne50() {
        $expectedBank[500] = 0;
        $expectedBank[100] = 0;
        $expectedBank[50] = 1;
        $expectedBank[20] = 0;
        $expectedBank[10] = 0;
        
        $bankReturn = $this->splitMoney->split(50);

        $this->assertEquals($expectedBank, $bankReturn);
    }

    public function testSplit680ReturnOne500One100One50One20One10() {
        $expectedBank[500] = 1;
        $expectedBank[100] = 1;
        $expectedBank[50] = 1;
        $expectedBank[20] = 1;
        $expectedBank[10] = 1;
        
        $bankReturn = $this->splitMoney->split(680);

        $this->assertEquals($expectedBank, $bankReturn);
    }

    public function testSplit780ReturnOne500Two100One50One20One10() {
        $expectedBank[500] = 1;
        $expectedBank[100] = 2;
        $expectedBank[50] = 1;
        $expectedBank[20] = 1;
        $expectedBank[10] = 1;
        
        $bankReturn = $this->splitMoney->split(780);

        $this->assertEquals($expectedBank, $bankReturn);
    }

    public function testSplit950ReturnOne500Four100One50() {
        $expectedBank[500] = 1;
        $expectedBank[100] = 4;
        $expectedBank[50] = 1;
        $expectedBank[20] = 0;
        $expectedBank[10] = 0;
        
        $bankReturn = $this->splitMoney->split(950);

        $this->assertEquals($expectedBank, $bankReturn);
    }
}
