<?php
session_start();
if($_SESSION["name"] == null){
  header("location:../../../login.php"); 
}
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

// ------------學生--------------
// ------------學生--------------
// ------------學生--------------
?>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/boardadd.css">
        <link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
        <link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
    </head>
    <body>

<!-- ---------- -->
<!-- ---------- -->
<div class="bg" >

  <img src="../file/background/boardadd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form method="POST"  action="" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Board add</div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      <?php include '../SQL/datause.php';?>
      <?php 
      echo $result["C_CN"];
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav burger-center">

       <?php include '../config.php';?>
        <?php
        if ($result) {
          $UA_PL = $result['UA_PL'];
          if ($UA_PL == '0') {
			echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
			// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
			// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
			echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
			echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
			echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
			// echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
		} elseif ($UA_PL == '1') {
			echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
			// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
			// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
			echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
			echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
			echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
			// echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
		} else {
			// echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
			// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
			// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
			// echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
			// echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
			// echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
		}
}
?>
        <a class="nav-item nav-link navpage" href="#"><span class="glyphicon glyphicon-user"></span>

        <?php
          // echo"<center><font color='blue';font size='8'>";
          echo $result["UA_Name"] . "\n你好";
          // echo "</font>";
          ?>
        </a>
        <a class="nav-item nav-link navpage" href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>
          Logout</a>

      </div>
    </div>
</nav>
<table style="border:3px #00BBFF solid;color:white;margin:auto;" cellpadding="10" border='1'>

<?php


// echo "{";
// echo "\"Cr_Name\":";
if (isset($_POST["Cr_Name"])) {
    $Cr_Name = $_POST["Cr_Name"];
    echo "<tr><td>";
    // echo $Cr_Name . ",";
} else {
    echo "<tr><td>未選擇班級" . ",";
}
// echo "\"page\":";
if (($_POST["page"] != '0')) {
    $page = $_POST["page"];
    // echo $page . ",";
} else {
    echo "未選擇分頁" . ",";
}
// echo "\"option\":";
if (($_POST["option"] != '0')) {
    $option = $_POST["option"];
    // echo "</td></tr>";
    // echo $option . ",";
} else {
    echo "未選擇則數</td></tr>" . ",";
}
// echo "\"title\":";
// if (($_POST["title"] != '')) {
//     $title = $_POST["title"];
    // echo $title . ",";
//     echo "</td></tr>";
// } else {
//     echo "未輸入標題</td></tr>" . ",";
// }
// echo "\"detail\":";
if (isset($_POST["detail"])) {
    $detail = $_POST["detail"];
    // echo $detail . ",";
} else {
    // echo "未輸入內容" . ",";
    // echo "</td>";
}
// echo "\"detail\":";
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    // echo $UA_Acu . ",";
} else {
    // echo "no_UA_Acu" . ",";
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
if(isset($_POST["Cr_Name"])){
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
    if ($_POST["page"] != '0'){
        $sql = "select * from BulletinBoard where BB_Id = '$page'";
        $rows = mysqli_query($bd, $sql);
        $num  = mysqli_num_rows($rows);
        if ($num == 0){
            $sql = "insert into BulletinBoard (BB_Id, BB_Cid, BB_CrId, BB_SN, " . 'BB_B' . $option . ") values ('$page', '$C_Id', '$Cr_Id', '$Cr_Name', '$detail')";
            $rows = mysqli_query($bd, $sql);
            $url = "../index.php";
            echo "新增資料完成，3秒後返回首頁</td>";
            echo "<meta http-equiv=refresh content=3;url=$url>";
        }else{
            $sql = "UPDATE BulletinBoard SET  BB_Cid = '$C_Id', BB_CrId = '$Cr_Id', BB_SN = '$Cr_Name', " . 'BB_B' . $option . " = '$detail' where BB_Id = '$page'";
            $rows = mysqli_query($bd, $sql);
            $url = "../index.php";
            echo "更新資料完成，3秒後返回首頁</td>";
            echo "<meta http-equiv=refresh content=3;url=$url>";
        }
    }

}



// echo "}";


?>
</table>

