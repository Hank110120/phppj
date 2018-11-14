<?php


session_start(); // 啟用交談期




$name = "";
$password = "";
// 取得表單欄位值
if (isset($_POST["UA_Acu"])) {
	$name = $_POST["UA_Acu"];
}

if (isset($_POST["UA_Psw"])) {
	$password = $_POST["UA_Psw"];
}

// 檢查是否輸入使用者名稱和密碼
if ($name != "" && $password != "") {

	// 建立MySQL的資料庫連接
	$bd = mysqli_connect("220.135.97.54:3307", "root", "jacky110120", "team3")
	or die("無法開啟MySQL資料庫連接!<br/>");

	//送出UTF8編碼的MySQL指令
	mysqli_query($bd, 'SET NAMES utf8');
	// 建立SQL指令字串
	$sql = "SELECT * FROM UserAccount WHERE UA_Psw= '$password' AND UA_Acu='$name'";
	// echo $name;
	// echo $password;
	// 執行SQL查詢
	$result = mysqli_query($bd, $sql);
	$total_records = mysqli_num_rows($result);
	// 是否有查詢到使用者記錄
	if ($total_records > 0) {
		// 成功登入, 指定Session變數
		$_SESSION["login_session"] = true;
		header("Location: index.php");
	} else {
		// 登入失敗
		echo "<center><font color='red';font size='16'>";
		echo "使用者名稱或密碼錯誤!<br/>";
		echo "</font>";
		$_SESSION["login_session"] = false;
	}
	$_SESSION["name"] = $name;
        // mysqli_close($link); // 關閉資料庫連接
        
        
        

}
?>
