<?php

$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";


if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}

$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql  = "SELECT * FROM Student WHERE S_Phone = (SELECT UA_Phone FROM UserAccount WHERE UA_Acu = '$UA_Acu')";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);









$i = 0;


