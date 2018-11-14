<?php
//The first question:empty_input
//The second question:password_error
//The third question:"The_Account_has_been_registered"
//The fourth question:The_Email_has_been_registered
$servername = '220.135.97.54:3307';
$username = 'root';
$password = 'jacky110120';
$database = 'team3';

$Registered_success = "false";

// ------------師資--------------
// ------------師資--------------
// ------------師資--------------

echo "{";
echo "\"TP_VC\":";
if (isset($_POST["TP_VC"])) {
	$TP_VC = $_POST["TP_VC"];
	echo $TP_VC . ",";
} else {
	echo "no_TP_VC" . ",";
}
echo "\"TP_Avater\":";
if (isset($_POST["TP_Avater"])) {
	$TP_Avater = $_POST["TP_Avater"];
	echo $TP_Avater . ",";
} else {
	echo "no_TP_Avater" . ",";
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
$tmpname = $_FILES['TP_Avater']['tmp_name'];
$instr = fopen($tmpname, "rb");
$TP_Avater = addslashes(fread($instr, filesize($tmpname)));
// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "Select * From UserAccount Where UA_VC='$TP_VC'";
$rows = mysqli_query($bd, $sql);
$num = mysqli_num_rows($rows);
echo "\"The_TP_VC_has_been_registered\":";
if ($num == 0) {
	echo "The_TP_VC_has_been_registered1" . "}";
	exit;
} else {
	$sql = "Insert Into TeacherPresentation (TP_VC,TP_Avater,TP_Name,TP_TI) Values ('$TP_VC', '" . $TP_Avater . "','$TP_Name','$TP_TI')";
	mysqli_query($bd, $sql);
}

// --------------------------------------------------------
// --------------------------------------------------------

// $Registered_success = "true";
// echo "\"Registered_success\":";
// echo $Registered_success;
echo "}";
