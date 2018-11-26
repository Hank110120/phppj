<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
$servername = '220.135.97.54:3307';
$username = 'root';
$password = 'jacky110120';
$database = 'team3';

$Registered_success = "false";



error_reporting(0);
$SC_CN = $_POST[SC_CN];
$SC_SN = $_POST[SC_SN];
$UA_Name = $_POST[UA_Name];
$news = $_POST[bnews];

$bd = mysqli_connect($servername, $username, $password, $database);
$sql = "insert into bt1(no,mess_CN,mess_SN,mess_OJ,news)values(null,'$SC_CN','$UA_Name','2','$news')";
$rows = mysqli_query($bd, $sql);
include "b_index.php";
?>
</body>
</html>