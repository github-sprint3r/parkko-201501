<?
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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pull-right">
                <form action="#">
                    <table id="plate_detail">
                        <tbody>
                            <tr>
                                <td>ชื่อ: </td>
                                <td><?=$plate['first_name']?></td>
                            </tr>
                            <tr>
                                <td>นามสกุล: </td>
                                <td><?=$plate['last_name']?></td>
                            </tr>
                            <tr>
                                <td>ทะเบียนรถ: </td>
                                <td><?=$plate['plate']?></td>
                            </tr>
                            <tr>
                                <td>จังหวัด: </td>
                                <td><?=$plate['country']?></td>
                            </tr>
                            <tr>
                                <td>วันเวลาที่เข้า: </td>
                                <td>วันเสาร์ ที่ ๑๑ มกราคม พ.ศ.๒๕๕๘</td>
                            </tr>
                            <tr>
                                <td>วันเวลาที่ออก: </td>
                                <td>วันอาทิตย์ ที่ ๑๒ มกราคม พ.ศ.๒๕๕๘</td>
                            </tr>
                            <tr>
                                <td>ราคาที่ต้องชำระ: </td>
                                <td>50 บาท</td>
                            </tr>
                            <tr>
                                <td>จำนวนเงินที่ชำระ: </td>
                                <td><input type="text" name="receive" value="1000">บาท<br></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="button" id="calculate_button" value="คำนวนเงินทอน"><br>
                </form>
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
        alert('test');
 });
</script>
</html>