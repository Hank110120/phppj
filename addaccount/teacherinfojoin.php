<?php
session_start();
//The first question:empty_input
//The second question:password_error
//The third question:"The_Account_has_been_registered"
//The fourth question:The_Email_has_been_registered
$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";

// ------------師資--------------
// ------------師資--------------
// ------------師資--------------



echo "{";
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}
echo "\"option\":";
if (isset($_POST["option"])) {
    $option = $_POST["option"];
    echo $option . ",";
} else {
    echo "no_option" . ",";
}
echo "\"TP_Name\":";
if (isset($_POST["TP_Name"])) {
    $TP_Name = $_POST["TP_Name"];
    echo $TP_Name . ",";
} else {
    echo "no_TP_Name" . ",";
}
echo "\"TP_TI\":";
if (isset($_POST["TP_TI"])) {
    $TP_TI = $_POST["TP_TI"];
    echo $TP_TI . ",";
} else {
    echo "no_TP_TI" . ",";
}

// --------------------------------------------------------
// --------------------------------------------------------
// $tmpname = $_FILES['TP_Avater']['tmp_name'];
// $instr     = fopen($tmpname, "rb");
// $TP_Avater = addslashes(fread($instr, filesize($tmpname)));
// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql  = "SELECT C_Id FROM Company WHERE C_VC = (SELECT UA_CVC FROM UserAccount WHERE UA_Acu = '$UA_Acu')";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$C_Id = $result['C_Id'];

$sql1 = "select * from TeacherPresentation where TP_Id = '$option'";
$rows1 = mysqli_query($bd, $sql1);
$num  = mysqli_num_rows($rows1);

if ($num == 0){
    $sql = "insert into TeacherPresentation (TP_Id, TP_CId, TP_Name, TP_TI) values ('$option', '$C_Id', '$TP_Name', '$TP_TI')";
    $rows = mysqli_query($bd, $sql);
}else{
    $sql = "UPDATE TeacherPresentation SET TP_Name = '$TP_Name', TP_TI = '$TP_TI' where TP_Id = '$option'";
    $rows = mysqli_query($bd, $sql);
}


// --------------------------------------------------------
// --------------------------------------------------------

// $Registered_success = "true";
// echo "\"Registered_success\":";
// echo $Registered_success;
echo "}";



