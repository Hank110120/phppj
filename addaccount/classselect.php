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
$sql  = "Select UA_Name From UserAccount where UA_PL = '1'";
$rows = mysqli_query($bd, $sql);

$i = 0;

