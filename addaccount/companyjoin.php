<?php
        session_start();
?>
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

// ------------公司--------------
// ------------公司--------------
// ------------公司--------------



echo "{";
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}
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
// $tmpname1 = $_FILES['C_CL']['tmp_name'];
// $instr1   = fopen($tmpname1, "rb");
// $C_CL     = addslashes(fread($instr1, filesize($tmpname1)));
// --------------------------------------------------------
// --------------------------------------------------------
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql  = "SELECT * FROM Company WHERE C_VC = (select UA_CVC from UserAccount where UA_Acu = '$UA_Acu')";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$C_VC = $result['C_VC'];
    // var_dump($C_VC);
    // die;
$num = mysqli_num_rows($rows);
if ($num > 0){
    $sql = "UPDATE Company SET  C_CN = '$C_CN',C_CP = '$C_CP' where C_VC = '$C_VC'";
    $rows =  mysqli_query($bd, $sql);
}

echo "}";



