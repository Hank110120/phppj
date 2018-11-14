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

// ------------輪播--------------
// ------------輪播--------------
// ------------輪播--------------



echo "{";
echo "\"C_VC\":";
if (isset($_POST["C_VC"])) {
    $C_VC = $_POST["C_VC"];
    echo $C_VC . ",";
} else {
    echo "no_C_VC" . ",";
}
echo "\"Slide_1\":";
if (isset($_POST["Slide_1"])) {
    $Slide_1 = $_POST["Slide_1"];
    echo $Slide_1 . ",";
} else {
    echo "no_Slide_1" . ",";
}
echo "\"Slide_2\":";
if (isset($_POST["Slide_2"])) {
    $Slide_2 = $_POST["Slide_2"];
    echo $Slide_2 . ",";
} else {
    echo "no_Slide_2" . ",";
}
echo "\"Slide_3\":";
if (isset($_POST["Slide_3"])) {
    $Slide_3 = $_POST["Slide_3"];
    echo $Slide_3 . ",";
} else {
    echo "no_Slide_3" . ",";
}
echo "\"Slide_4\":";
if (isset($_POST["Slide_4"])) {
    $Slide_4 = $_POST["Slide_4"];
    echo $Slide_4 . ",";
} else {
    echo "no_Slide_4" . ",";
}
echo "\"Slide_5\":";
if (isset($_POST["Slide_5"])) {
    $Slide_5 = $_POST["Slide_5"];
    echo $Slide_5 . ",";
} else {
    echo "no_Slide_5" . ",";
}

// --------------------------------------------------------
// --------------------------------------------------------
// $tmpname = $_FILES['Slide_1']['tmp_name'];
// $name = '1.jpg';
// move_uploaded_file($tmpname,'D:/xampp/htdocs/rebuild/IMAGES/img/');

// $tmpname = $_FILES['Slide_1']['tmp_name'];
// $file     = fopen($tmpname, "rb");
// $Slide_1 = fread($file, filesize($tmpname));
// fclose($file);
// $Slide_1 = base64_encode($Slide_1);

// $tmpname = $_FILES['Slide_2']['tmp_name'];
// $file     = fopen($tmpname, "rb");
// $Slide_2 = fread($file, filesize($tmpname));
// fclose($file);
// $Slide_2 = base64_encode($Slide_2);

// $tmpname = $_FILES['Slide_3']['tmp_name'];
// $file     = fopen($tmpname, "rb");
// $Slide_3 = fread($file, filesize($tmpname));
// fclose($file);
// $Slide_3 = base64_encode($Slide_3);

// $tmpname = $_FILES['Slide_4']['tmp_name'];
// $file     = fopen($tmpname, "rb");
// $Slide_4 = fread($file, filesize($tmpname));
// fclose($file);
// $Slide_4 = base64_encode($Slide_4);

// $tmpname = $_FILES['Slide_5']['tmp_name'];
// $file     = fopen($tmpname, "rb");
// $Slide_5 = fread($file, filesize($tmpname));
// fclose($file);
// $Slide_5 = base64_encode($Slide_5);

$tmpname = $_FILES['Slide_1']['tmp_name'];
$instr     = fopen($tmpname, "rb");
$Slide_1 = addslashes(fread($instr, filesize($tmpname)));

$tmpname = $_FILES['Slide_2']['tmp_name'];
$instr     = fopen($tmpname, "rb");
$Slide_2 = addslashes(fread($instr, filesize($tmpname)));

$tmpname = $_FILES['Slide_3']['tmp_name'];
$instr     = fopen($tmpname, "rb");
$Slide_3 = addslashes(fread($instr, filesize($tmpname)));

$tmpname = $_FILES['Slide_4']['tmp_name'];
$instr     = fopen($tmpname, "rb");
$Slide_4 = addslashes(fread($instr, filesize($tmpname)));

$tmpname = $_FILES['Slide_5']['tmp_name'];
$instr     = fopen($tmpname, "rb");
$Slide_5 = addslashes(fread($instr, filesize($tmpname)));

// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql  = "Select * From Company Where C_VC='$C_VC'";
$rows = mysqli_query($bd, $sql);
$num  = mysqli_num_rows($rows);

if ($num != 0) {
    $sql = "UPDATE Company SET Slide_1 = '$Slide_1', Slide_2 = '$Slide_2', Slide_3 = '$Slide_3', Slide_4 = '$Slide_4', Slide_5 = '$Slide_5' where C_VC = '$C_VC'";
    mysqli_query($bd, $sql);
} 

// --------------------------------------------------------
// --------------------------------------------------------

$Registered_success = "true";
echo "\"Registered_success\":";
echo $Registered_success;
echo "}";



