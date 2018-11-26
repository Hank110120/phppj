<?php


// session_start(); // 啟用交談期


$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";

// 取得表單欄位值
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    // echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}


// 檢查是否輸入使用者名稱和密碼
$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}

	// 是否有查詢到使用者記錄
    $sql  = "SELECT * FROM UserAccount WHERE UA_Acu = '$UA_Acu'";
    
	if ($rows = mysqli_query($bd, $sql)) {
        $result = mysqli_fetch_assoc($rows);
    }
    // var_dump($result['UA_Name']);
    // die;
	$sql1 = "select * from TeacherPresentation where TP_Id = '1'";
    $rows1 = mysqli_query($bd, $sql1);
    $result1 = mysqli_fetch_assoc($rows1);
    $sql2 = "select * from TeacherPresentation where TP_Id = '2'";
    $rows2 = mysqli_query($bd, $sql2);
    $result2 = mysqli_fetch_assoc($rows2);
    $sql3 = "select * from TeacherPresentation where TP_Id = '3'";
    $rows3 = mysqli_query($bd, $sql3);
    $result3 = mysqli_fetch_assoc($rows3);
    $sql4 = "select * from TeacherPresentation where TP_Id = '4'";
    $rows4 = mysqli_query($bd, $sql4);
    $result4 = mysqli_fetch_assoc($rows4);
    $sql5 = "select * from TeacherPresentation where TP_Id = '5'";
    $rows5 = mysqli_query($bd, $sql5);
    $result5 = mysqli_fetch_assoc($rows5);
    $sql6 = "select * from TeacherPresentation where TP_Id = '6'";
    $rows6 = mysqli_query($bd, $sql6);
    $result6 = mysqli_fetch_assoc($rows6);
    $sql7 = "select * from TeacherPresentation where TP_Id = '7'";
    $rows7 = mysqli_query($bd, $sql7);
    $result7 = mysqli_fetch_assoc($rows7);
    $sql8 = "select * from TeacherPresentation where TP_Id = '8'";
    $rows8 = mysqli_query($bd, $sql8);
    $result8 = mysqli_fetch_assoc($rows8);
    $sql9 = "select * from TeacherPresentation where TP_Id = '9'";
    $rows9 = mysqli_query($bd, $sql9);
    $result9 = mysqli_fetch_assoc($rows9);
    $sql10 = "select * from TeacherPresentation where TP_Id = '10'";
    $rows10 = mysqli_query($bd, $sql10);
    $result10 = mysqli_fetch_assoc($rows10);
    $sql11 = "select * from Company where C_VC = (select UA_CVC from UserAccount where UA_Acu = '$UA_Acu')";
    $rows11 = mysqli_query($bd, $sql11);
    $result11 = mysqli_fetch_assoc($rows11);


        // mysqli_close($link); // 關閉資料庫連接
        
        
        


?>
