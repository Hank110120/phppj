<?php

$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";




$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}

$UA_Acu = $_SESSION['name'];

$sql  = "Select SC_SN From StudentClass";
$rows = mysqli_query($bd, $sql);



$sql1  = "Select SC_CN From StudentClass where SC_SN = $SC_SN";
$rows1 = mysqli_query($bd, $sql1);





$i = 0;


