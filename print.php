<?php 
include_once('library/ParkkoClass.php');
$parkko = new ParkkoClass();

if(isset($_GET['id'])) {
	$data = array(
			'id' =>'สฬ 5420',
			'province' =>'กรุงเทพมหานคร',
			'in' =>'2015-01-10 08:30',
			'out' =>'2015-01-11 16:32',
			'cost' =>50,
			'money_in' =>1000,
			'money_out' =>950
			);
} else {
	$data = array(
			'id' =>'ณข 1597',
			'province' =>'กรุงเทพมหานคร',
			'in' =>'2015-01-10 08:00',
			'out' =>'2015-01-10 17:00',
			'cost' =>50,
			'money_in' =>500,
			'money_out' =>450,
	);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Print</title>
<meta name="generator" content="Bootply" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="/assets/font/boon/css/customized-bootstrap.css">
<link rel="stylesheet" href="/assets/font/boon/css/boon.css">
<link rel="stylesheet" href="/assets/css/parkko.css">
<!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>

<div id="border">
	<div class="header">
		<h1>PARK-KO</h1>
		<strong>ใบเสร็จแบบย่อ</strong>
	</div>
	<div class="border">
		<span class="border-row"><strong>หมายเลขทะเบียน: </strong><?php echo $parkko->convertToThaiNumber($data['id'])?></span>
		<span class="border-row"><strong>จังหวัด: </strong><span class="value"><?php echo $data['province']?></span></span>
		<span class="border-row"><strong>เวลาเข้า: </strong><br/><span class="value"><?php echo $parkko->thai_date(strtotime($data['in']))?></span></span>
		<span class="border-row"><strong>เวลาออก: </strong><br/><span class="value"><?php echo $parkko->thai_date(strtotime($data['out']))?></span></span>
		<span class="border-row"><strong>ระยะเวลา: </strong><span class="value"><?php echo $parkko->convertToThaiNumber($parkko->timeDuration($data['in'], $data['out']))?></span></span>
		<span class="border-row"><strong>ค่าบริการ: </strong><span class="value"><?php echo $parkko->convertToThaiNumber(number_format($data['cost'], 2))?> บาท</span></span>
		<span class="border-row"><strong>รับเงิน: </strong><span class="value"><?php echo $parkko->convertToThaiNumber(number_format($data['money_in'], 2))?> บาท</span></span>
		<span class="border-row"><strong>ทอนเงิน: </strong><span class="value"><?php echo $parkko->convertToThaiNumber(number_format($data['money_out'], 2))?> บาท</span></span>
	</div>
	<div class="footer">
		<strong>ขอบคุณที่ใช้บริการค่ะ</strong>
	</div>
</div>
<br/>
<div id="printButton">
	<input type="button" value="พิมพ์ใบเสร็จ" onclick="printPage()" class="btn btn-primary">
</div>
	
<script type='text/javascript'
	src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript'
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/font/boon/js/fittext.js"></script>
<script>
function printPage() {
	if(document.all) {
		document.all.divButtons.style.visibility = 'hidden';
		window.print();
		document.all.divButtons.style.visibility = 'visible';
	} else {
		document.getElementById('printButton').style.visibility = 'hidden';
		window.print();
		document.getElementById('printButton').style.visibility = 'visible';
	}
}
</script>
</body>
</html>
