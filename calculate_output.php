<?php
require "library/ConnectMysql.php";

$license = $_POST["license_field"];

$result = mysql_query('SELECT * from plates where plate = "'.$license.'"');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
    $plate['first_name'] = $row['first_name'];
    $plate['last_name'] = $row['last_name'];
    $plate['plate'] = $row['plate'];
    $plate['country'] = $row['country'];

    if($row['plate'] == 'สฬ5420') {
        $plate['priceThai'] = "๑๓๐";
        $plate['price'] = "130";
    } else {
        $plate['priceThai'] = "๑๕๓๐";
        $plate['price'] = "1530";
    }
}

?>

<!DOCTYPE html>
<html>
<head><title>Parkko | ข้อมูลเลขทะเบียน</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
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

<style>
#changeMoneyTable {
    width: 30%;
}
#changeMoneyTable td {
    border: 1px solid black;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pull-right">
                <form action="#">
                    <table id="plate_detail">
                        <tbody>
                            <tr>
                                <td>ชื่อ: </td>
                                <td><?php echo $plate['first_name']?></td>
                            </tr>
                            <tr>
                                <td>นามสกุล: </td>
                                <td><?php echo $plate['last_name']?></td>
                            </tr>
                            <tr>
                                <td>ทะเบียนรถ: </td>
                                <td><?php echo $plate['plate']?></td>
                            </tr>
                            <tr>
                                <td>จังหวัด: </td>
                                <td><?php echo $plate['country']?></td>
                            </tr>
                            <tr>
                                <td>วันเวลาที่เข้า: </td>
                                <td>วันเสาร์ ที่ ๑๑ มกราคม พ.ศ.๒๕๕๘ เวลา ๐๘:๐๐ น.</td>
                            </tr>
                            <tr>
                                <td>วันเวลาที่ออก: </td>
                                <td>วันอาทิตย์ ที่ ๑๒ มกราคม พ.ศ.๒๕๕๘ เวลา ๑๗:๐๐ น.</td>
                            </tr>
                            <tr>
                                <td>ราคาที่ต้องชำระ: </td>
                                <td>​<?php echo $plate['priceThai']?> บาท</td>
                            </tr>
                            <tr>
                                <td>จำนวนเงินที่ชำระ: </td>
                                <td><input type="text" name="receive" value="">บาท<br></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="button" id="calculate_button" value="คำนวนเงินทอน"><br>
                </form>
            </div>
            <div id="splitMoney">
            </div>
        </div>
    </div>
</body>
<script type='text/javascript'
    src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript'
    src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/font/boon/js/fittext.js"></script>
<script type="text/javascript">
    $(document).on('click', '#calculate_button', function(){
        $.ajax({
            url: 'calculateMoneyAjax.php',
            type: 'POST',
            data: {
                parking_price: <?php echo $plate['price']; ?>,
                receive: $("[name='receive']").val()
            },
            success: function(response) {
                $("#splitMoney").html(response);
            }
        });
    });
</script>
</html>
