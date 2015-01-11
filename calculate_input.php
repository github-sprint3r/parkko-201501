<html>
<head>
    <title>Parkko | Cashier</title>
    <meta charset="UTF-8"></head>
</head>
<body>
<div class="row">
<?php

?>
    <div class="col-md-12 pull-right">
        <h4>กรอกทะเบียนที่ต้องการชำระเงิน</h4>
        <form action="/calculate_output.php" method="POST">
            เลขทะเบียน: <input type="text" name="license_field"><br>
            <input type="submit" name="search_button" value="ค้นหา"><br>
        </form>
    </div>
</div>
</body>
</html>