<?php

require "library/CalculateMoney.php";
require "library/SplitMoney.php";

$parkingPrice = $_POST['parking_price'];
$receive = $_POST['receive'];

$calculateMoney = new CalculateMoney();
$splitMoney = new SplitMoney();

$changeMoney = $calculateMoney->calculate($parkingPrice, $receive);

$bank = $splitMoney->split($changeMoney);

$bankChange['total'] = $changeMoney;
$bankChange['bank'] = $bank;

echo json_encode($bankChange);