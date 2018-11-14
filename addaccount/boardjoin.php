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

// ------------學生--------------
// ------------學生--------------
// ------------學生--------------



echo "{";
echo "\"Cr_Name\":";
if (isset($_POST["Cr_Name"])) {
    $Cr_Name = $_POST["Cr_Name"];
    echo $Cr_Name . ",";
} else {
    echo "no_Cr_Name" . ",";
}
echo "\"page\":";
if (isset($_POST["page"])) {
    $page = $_POST["page"];
    echo $page . ",";
} else {
    echo "no_page" . ",";
}
echo "\"option\":";
if (isset($_POST["option"])) {
    $option = $_POST["option"];
    echo $option . ",";
} else {
    echo "no_option" . ",";
}
echo "\"title\":";
if (isset($_POST["title"])) {
    $title = $_POST["title"];
    echo $title . ",";
} else {
    echo "no_title" . ",";
}
echo "\"detail\":";
if (isset($_POST["detail"])) {
    $detail = $_POST["detail"];
    echo $detail . ",";
} else {
    echo "no_detail" . ",";
}
// echo "\"detail\":";
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
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

$sql = "select Cr_Id from Classroom where Cr_Name = '$Cr_Name'";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$Cr_Id = $result['Cr_Id'];
$sql1 = "SELECT C_Id FROM Company WHERE C_VC = (SELECT UA_CVC FROM UserAccount WHERE UA_Acu = '$UA_Acu')";
$rows1 = mysqli_query($bd, $sql1);
$result1 = mysqli_fetch_assoc($rows1);
$C_Id = $result1['C_Id'];
// var_dump($UA_Acu);
// var_dump($C_Id);
// die;
if ($page){
    $sql = "select " . 'BB_T' . $option . " from BulletinBoard where BB_Id = '$page'";
    $rows = mysqli_query($bd, $sql);
    $num  = mysqli_num_rows($rows);
    if ($num == 0){
        $sql = "insert into BulletinBoard (BB_Id, BB_Cid, BB_CrId, BB_SN, " . 'BB_T' . $option . ", " . 'BB_B' . $option . ") values ('$page', '$C_Id', '$Cr_Id', '$Cr_Name', '$title', '$detail')";
        $rows = mysqli_query($bd, $sql);
    }else{
        $sql = "UPDATE BulletinBoard SET  BB_Cid = '$C_Id', BB_CrId = '$Cr_Id', BB_SN = '$Cr_Name', " . 'BB_T' . $option . " = '$title', " . 'BB_B' . $option . " = '$detail' where BB_Id = '$page'";
        $rows = mysqli_query($bd, $sql);
    }
}



echo "}";



