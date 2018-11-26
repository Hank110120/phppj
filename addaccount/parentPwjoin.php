<?php
session_start();
if($_SESSION["name"] == null){
  header("location:../login.php"); 
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
?>
<html>
    <link rel="stylesheet" type="text/css" href="../CSS/company.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
		<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<head>

<body>



<div class="bg" >

  <img src="../file/background/company.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form method="POST"  action="parentPwjoin.php" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Password Change</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
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
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
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
<table style="border:3px #00BBFF solid;color:#FF44AA;margin:auto;" cellpadding="10" border='1'>
    
      <?php 
      echo "";
        if (($_POST["oldpw"] != null)) {
            $oldpw = $_POST["oldpw"];
            echo "<td>";
            // echo $oldpw . ",";
        } else {
            echo "<td>舊密碼未輸入" . "，";
        }
        if (($_POST["UA_Psw"] != null)) {
            $UA_Psw = $_POST["UA_Psw"];
            // echo $UA_Psw . ",";
        } else {
            echo "新密碼未輸入";
            echo "</td>";
        }
        
      ?>
    
<?php
// echo "{";
if (isset($_SESSION["name"])) {
    $UA_Acu = $_SESSION["name"];
    // echo $UA_Acu . ",";
} else {
    // echo "no_UA_Acu" . ",";
}

$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST["UA_Psw"] != null && $_POST["oldpw"] != null){
  $sql  = "SELECT * FROM UserAccount where UA_Psw = '$oldpw'";
  $rows = mysqli_query($bd, $sql);
  $num = mysqli_num_rows($rows);
  if($num != null){
      $sql1 = "UPDATE UserAccount SET  UA_Psw = '$UA_Psw' where UA_Acu = '$UA_Acu'";
      $rows1 = mysqli_query($bd, $sql1);
      $url = "../index.php";
      echo "密碼變更成功 ! ! 3秒後返回首頁</td>";
      echo "<meta http-equiv=refresh content=3;url=$url>";
      
  }else{
    $url = "../addaccount/parentPw.php";
    echo "舊密碼輸入錯誤，請重新輸入，3秒後返回前頁</td>";
    echo "<meta http-equiv=refresh content=3;url=$url>";
  }
}else{
  $url = "../addaccount/parentPw.php";
  echo "<tr><td>未輸入完成，變更失敗，3秒後返回前頁</td></tr>";
  echo "<meta http-equiv=refresh content=3;url=$url>";
}
?>
</table>






