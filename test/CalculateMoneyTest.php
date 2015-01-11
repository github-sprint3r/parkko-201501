<?php

class CalculateMoneyTest extends PHPUnit_Framework_TestCase {

    private $calculateMoney;

    public function setUp() {
        $this->calculateMoney = new CalculateMoney();
    }

    public function testParkingPrice50Receive1000Return950() {
        $parkingPrice = 50;
        $recieve = 1000;

        $returnAmount = $this->calculateMoney->calculate($parkingPrice, $recieve);

        $this->assertEquals(950, $returnAmount);
    }

    public function testParkingPrice800Receive1000Return950() {
        $parkingPrice = 800;
        $recieve = 1000;

        $returnAmount = $this->calculateMoney->calculate($parkingPrice, $recieve);

        $this->assertEquals(200, $returnAmount);
    }
}
