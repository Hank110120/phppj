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
    $sql  = "SELECT * FROM ContactBook WHERE CB_SId = (SELECT UA_CVC FROM UserAccount WHERE UA_ACU = '$UA_Acu')";
    $rows = mysqli_query($bd, $sql);
    $result = mysqli_fetch_assoc($rows);

    
    // var_dump($result['UA_Name']);
    // die;
	



        // mysqli_close($link); // 關閉資料庫連接
        
        
        


?>
