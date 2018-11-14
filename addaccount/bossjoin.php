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

// ------------老闆--------------
// ------------老闆--------------
// ------------老闆--------------



echo "{";
echo "\"UA_PL\":";
if (isset($_POST["UA_PL"])) {
    $UA_PL = $_POST["UA_PL"];
    echo $UA_PL . ",";
} else {
    echo "no_UA_PL" . ",";
}
echo "\"UA_Acu\":";
if (isset($_POST["UA_Acu"])) {
    $UA_Acu = $_POST["UA_Acu"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}
echo "\"UA_Psw\":";
if (isset($_POST["UA_Psw"])) {
    $UA_Psw = $_POST["UA_Psw"];
    echo $UA_Psw . ",";
} else {
    echo "no_UA_Psw" . ",";
}
echo "\"UA_Name\":";
if (isset($_POST["UA_Name"])) {
    $UA_Name = $_POST["UA_Name"];
    echo $UA_Name . ",";
} else {
    echo "no_UA_Name" . ",";
}
echo "\"UA_Phone\":";
if (isset($_POST["UA_Phone"])) {
    $UA_Phone = $_POST["UA_Phone"];
    echo $UA_Phone . ",";
} else {
    echo "no_UA_Phone" . ",";
}
echo "\"identity\":";
if (isset($_POST["identity"])) {
    $identity = $_POST["identity"];
    echo $identity . ",";
} else {
    echo "no_identity" . ",";
}
echo "\"UA_VC\":";
if (isset($_POST["UA_VC"])) {
    $UA_VC = $_POST["UA_VC"];
    echo $UA_VC . ",";
} else {
    echo "no_UA_VC" . ",";
}
// echo "\"UA_Avatar\":";
// if (isset($_POST["UA_Avatar"])) {
//     $UA_Avatar = $_POST["UA_Avatar"];
//     echo $UA_Avatar . ",";
// } else {
//     echo "no_UA_Avatar" . ",";
// }
echo "\"C_CN\":";
if (isset($_POST["C_CN"])) {
    $C_CN = $_POST["C_CN"];
    echo $C_CN . ",";
} else {
    echo "no_C_CN" . ",";
}
echo "\"C_CP\":";
if (isset($_POST["C_CP"])) {
    $C_CP = $_POST["C_CP"];
    echo $C_CP . ",";
} else {
    echo "no_C_CP" . ",";
}
// echo "\"C_CL\":";
// if (isset($_POST["C_CL"])) {
//     $C_CL = $_POST["C_CL"];
//     echo $C_CL . ",";
// } else {
//     echo "no_C_CL" . ",";
// }
// --------------------------------------------------------
// --------------------------------------------------------
// $tmpname = $_FILES['UA_Avatar']['tmp_name'];
// $instr     = fopen($tmpname, "rb");
// $UA_Avatar = addslashes(fread($instr, filesize($tmpname)));
// $tmpname1 = $_FILES['C_CL']['tmp_name'];
// $instr1   = fopen($tmpname1, "rb");
// $C_CL     = addslashes(fread($instr1, filesize($tmpname1)));
// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql  = "Select * From UserAccount Where UA_VC='$UA_VC'";
$rows = mysqli_query($bd, $sql);
$num  = mysqli_num_rows($rows);
echo "\"The_Account_has_been_registered\":";
if ($num != 0) {
    echo "The_Account_has_been_registered" . "}";
    exit;
} else {
    echo "pass" . ",";
}
$sql  = "Select * From UserAccount Where UA_Acu='$UA_Acu'";
$rows = mysqli_query($bd, $sql);
$num  = mysqli_num_rows($rows);
echo "\"The_UA_Acu_has_been_registered\":";
if ($num != 0) {
    echo "The_UA_Acu_has_been_registered" . "}";
    exit;
} else {
    echo "pass" . ",";
}
// --------------------------------------------------------
// --------------------------------------------------------
// $sql = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC,UA_Avater) Values ( '$UA_PL','$UA_Acu','$UA_Psw','$UA_Name','$UA_Phone','" . $identity . $UA_VC . "','" . $identity . $UA_VC . "', '" . $UA_Avatar . "')";
$sql = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC) Values ( '$UA_PL','$UA_Acu','$UA_Psw','$UA_Name','$UA_Phone','" . $identity . $UA_VC . "','" . $identity . $UA_VC . "')";
mysqli_query($bd, $sql);
// $sql1 = "Insert Into Company (C_CL,C_CN,C_CP,C_VC) Values ( '" . $C_CL . "','$C_CN','$C_CP','" . $identity . $UA_VC . "')";
$sql1 = "Insert Into Company (C_CN,C_CP,C_VC) Values ('$C_CN','$C_CP','" . $identity . $UA_VC . "')";
mysqli_query($bd, $sql1);
$Registered_success = "true";
echo "\"Registered_success\":";
echo $Registered_success;
echo "}";



