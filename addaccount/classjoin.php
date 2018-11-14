<?php
//The first question:empty_input
//The second question:password_error
//The third question:"The_Account_has_been_registered"
//The fourth question:The_Email_has_been_registered
$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";

// ------------學生--------------
// ------------學生--------------
// ------------學生--------------



echo "{";
echo "\"UA_Name\":";
if (isset($_POST["UA_Name"])) {
    $UA_Name = $_POST["UA_Name"];
    echo $UA_Name . ",";
} else {
    echo "no_UA_Name" . ",";
}

echo "\"Cr_Name\":";
if (isset($_POST["Cr_Name"])) {
    $Cr_Name = $_POST["Cr_Name"];
    echo $Cr_Name . ",";
} else {
    echo "no_Cr_Name" . ",";
}


// --------------------------------------------------------
// --------------------------------------------------------


// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}


// --------------------------------------------------------
// --------------------------------------------------------

$sql  = "Select * From UserAccount Where UA_Name='$UA_Name'";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$UA_VC = $result['UA_VC'];
// var_dump($Cr_Name);
// die;
$sql = "INSERT INTO Classroom (Cr_Name, Cr_VC) VALUES ('$Cr_Name', '$UA_VC')";
$rows = mysqli_query($bd, $sql);


echo "}";



