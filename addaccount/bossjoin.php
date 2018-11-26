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

?>

<table style="border:3px #00BBFF solid;color:#FF44AA;margin:auto;" cellpadding="10" border='1'>

<?php

if (isset($_POST["UA_PL"])) {
    $UA_PL = $_POST["UA_PL"];
} else {
}
if ($_POST["UA_Acu"] != null) {
    $UA_Acu = $_POST["UA_Acu"];
    echo "<tr><td>";
} else {
    echo "<tr><td>未輸入使用者帳號" . ",";
}
if (($_POST["UA_Psw"] != null)) {
    $UA_Psw = $_POST["UA_Psw"];
} else {
    echo "未輸入密碼" . ",";
}
if (($_POST["UA_Name"] != null)) {
    $UA_Name = $_POST["UA_Name"];
} else {
    echo "未輸入使用者名稱" . ",";
}
if (($_POST["UA_Phone"] != null)) {
    $UA_Phone = $_POST["UA_Phone"];
} else {
    echo "未輸入使用者電話" . ",";
}
if (isset($_POST["identity"])) {
    $identity = $_POST["identity"];
} else {
}
if (isset($_POST["UA_VC"])) {
    $UA_VC = $_POST["UA_VC"];
} else {
}

// echo "\"UA_Avatar\":";
// if (isset($_POST["UA_Avatar"])) {
//     $UA_Avatar = $_POST["UA_Avatar"];
//     echo $UA_Avatar . ",";
// } else {
//     echo "no_UA_Avatar" . ",";
// }
if (($_POST["C_CN"] != null)) {
    $C_CN = $_POST["C_CN"];
} else {
    echo "未輸入公司名稱" . ",";
}
if (($_POST["C_CP"] != null)) {
    $C_CP = $_POST["C_CP"];
    // echo "</td></tr>";
} else {
    echo "未輸入公司電話</td></tr>";
}

?>
<?php
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
if ($num != 0) {
    $url = "../addaccount/bossadd.php";
    echo "驗證碼重覆，3秒後返回上一頁重新產生";
    echo "<meta http-equiv=refresh content=3;url=$url>";    
} else {
    // echo "驗證碼未重覆";
}
if($_POST["UA_Acu"] != null){
    $sql  = "Select * From UserAccount Where UA_Acu='$UA_Acu'";
    $rows = mysqli_query($bd, $sql);
    $num  = mysqli_num_rows($rows);
    if ($num != 0) {
        $url = "../../addaccount/bossadd.php";
        echo "帳號已重覆，3秒後返回上一頁</td>";
        // echo "<meta http-equiv=refresh content=3;url=$url>"; 
    } else {
        $sql = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC) Values ( '$UA_PL','$UA_Acu','$UA_Psw','$UA_Name','$UA_Phone','" . $identity . $UA_VC . "','" . $identity . $UA_VC . "')";
        mysqli_query($bd, $sql);
        // $sql1 = "Insert Into Company (C_CL,C_CN,C_CP,C_VC) Values ( '" . $C_CL . "','$C_CN','$C_CP','" . $identity . $UA_VC . "')";
        $sql1 = "Insert Into Company (C_CN,C_CP,C_VC) Values ('$C_CN','$C_CP','" . $identity . $UA_VC . "')";
        mysqli_query($bd, $sql1);
        $url = "../../login.php";
        echo "帳號建立完成，3秒後返回登入頁面</td>";
        // echo "<meta http-equiv=refresh content=3;url=$url>"; 

    }
    
}

// --------------------------------------------------------
// --------------------------------------------------------
// $sql = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC,UA_Avater) Values ( '$UA_PL','$UA_Acu','$UA_Psw','$UA_Name','$UA_Phone','" . $identity . $UA_VC . "','" . $identity . $UA_VC . "', '" . $UA_Avatar . "')";

?>
</table>

