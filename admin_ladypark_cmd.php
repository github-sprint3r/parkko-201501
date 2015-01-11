<?php

include "library/LadyPark.php";

$slotId = $_POST["slotId"];
$color = $_POST["color"];
$cmd = $_POST["cmd"];
// function
//
$ladyPark = new LadyPark();

if($cmd == "load"){

	$data["color"] = $ladyPark->getColorFromFile();

}else if($cmd == "click"){
	if($color == "#A1F779"){
		$data["color"] = "#FFB4DD";
	}else{
		$data["color"] = "#A1F779";
	}
	$ladyPark->setColorToFile($data["color"]);
}




echo json_encode($data);

?>