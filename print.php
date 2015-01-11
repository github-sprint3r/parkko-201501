<?php 
include_once('library/ParkkoClass.php');
$parkko = new ParkkoClass();
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
		<span class="border-row"><strong>หมายเลขทะเบียน: </strong><?php echo $parkko->convertToThaiNumber('สฬ 5420')?></span>
		<span class="border-row"><strong>จังหวัด: </strong><span class="value">กรุงเทพมหานครฯ</span></span>
		<span class="border-row"><strong>เวลาเข้า: </strong><br/><span class="value"><?php echo $parkko->thai_date(strtotime('2015-01-10 08:30'))?></span></span>
		<span class="border-row"><strong>เวลาออก: </strong><br/><span class="value"><?php echo $parkko->thai_date(strtotime('2015-01-11 16:32'))?></span></span>
		<span class="border-row"><strong>ระยะเวลา: </strong><span class="value"><?php echo $parkko->timeDuration('2015-01-10 08:30', '2015-01-11 16:32')?></span></span>
		<span class="border-row"><strong>ค่าบริการ: </strong><span class="value"><?php echo $parkko->convertToThaiNumber(number_format('1000', 2))?> บาท</span></span>
	</div>
	<div class="footer">
		<strong>ขอบคุณที่ใช้บริการค่ะ</strong>
	</div>
</div>
	
<script type='text/javascript'
	src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript'
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/font/boon/js/fittext.js"></script>
<script type="text/javascript">
    fitText(document.getElementById('title'), 0.5);
  </script>

</body>
</html>
