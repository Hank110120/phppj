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
$name = $_POST[bname];
$news = $_POST[bnews];

$bd = mysqli_connect($servername, $username, $password, $database);
$sql = "insert into bt1(no,name,news)values(null,'$name','$news')";
$rows = mysqli_query($bd, $sql);
include "b_index.php";
?>
</body>
</html>