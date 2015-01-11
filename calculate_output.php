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

<html>
<head><title>Parkko | Cashier</title>
<meta charset="UTF-8"></head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pull-right">
                <form action="#">
                    <table>
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
                    <input type="button" value="คำนวนเงินทอน"><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>