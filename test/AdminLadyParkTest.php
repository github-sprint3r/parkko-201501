<?php

class AdminLadyParkTest extends PHPUnit_Framework_TestCase {

	public $ladyPark;

	function setUp() {
		$this->ladyPark = new LadyPark();
	}

	function testIfAnyColorInfile() {
		$actualResult = $this->ladyPark->getColorFromFile();
		$this->assertEquals("#A1F779",$actualResult);
	}
}
?>