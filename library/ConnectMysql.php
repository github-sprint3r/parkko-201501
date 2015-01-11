<?php
$username = "root";
$password = "P@ssw0rd";
// $hostname = "27.254.142.62";
$hostname = "127.0.0.1"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
// echo "Connected to MySQL<br>";

  $db_selected = mysql_select_db('PARKKO-201501', $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>