<?php

require "library/CalculateMoney.php";
require "library/SplitMoney.php";

function arabicToThai($numberChange) {
	$number = array(
		'1' =>'๑',
		'2' =>'๒',
		'3' =>'๓',
		'4' =>'๔',
		'5' =>'๕',
		'6' =>'๖',
		'7' =>'๗',
		'8' =>'๘',
		'9' =>'๙'
	);

	$listNumber = explode('', $numberChange);
	var_dump($listNumber);
}

function arabicToThai2($numberChange) {
	$numberChange = str_replace("1","๑", $numberChange);
	$numberChange = str_replace("2","๒", $numberChange);
	$numberChange = str_replace("3","๓", $numberChange);
	$numberChange = str_replace("4","๔", $numberChange);
	$numberChange = str_replace("5","๕", $numberChange);
	$numberChange = str_replace("6","๖", $numberChange);
	$numberChange = str_replace("7","๗", $numberChange);
	$numberChange = str_replace("8","๘", $numberChange);
	$numberChange = str_replace("9","๙", $numberChange);
	$numberChange = str_replace("0","๐", $numberChange);

	return $numberChange;
}

$parkingPrice = $_POST['parking_price'];
$receive = $_POST['receive'];

$calculateMoney = new CalculateMoney();
$splitMoney = new SplitMoney();

$changeMoney = $calculateMoney->calculate($parkingPrice, $receive);

$bank = $splitMoney->split($changeMoney);

$bankChange['total'] = $changeMoney;
$bankChange['bank'] = $bank;

// echo json_encode($bankChange);

echo "<div>ยอดเงินที่ต้องทอน". arabicToThai2($changeMoney) ."</div>";

echo "<table id='changeMoneyTable'>";

echo "<tr><th colspan='2'>เงินทอน</th></tr>";

foreach($bank as $key => $val) {
	echo "<tr><td>".arabicToThai2($key)."</td><td>".arabicToThai2($val)."</td></tr>";
}

echo "</table>";