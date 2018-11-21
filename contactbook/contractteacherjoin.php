<?php
session_start();
if($_SESSION["name"] == null){
  header("location:../../../login.php"); 
}
?>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/teachercontact.css">
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



echo "{";
echo "\"Cr_Name\":";
if (isset($_POST["Cr_Name"])) {
    $Cr_Name = $_POST["Cr_Name"];
    echo $Cr_Name . ",";
} else {
    echo "no_Cr_Name" . ",";
}
echo "\"CB_CIT\":";
if (isset($_POST["CB_CIT"])) {
    $CB_CIT = $_POST["CB_CIT"];
    echo $CB_CIT . ",";
} else {
    echo "no_CB_CIT" . ",";
}
echo "\"CB_SIT\":";
if (isset($_POST["CB_SIT"])) {
    $CB_SIT = $_POST["CB_SIT"];
    echo $CB_SIT . ",";
} else {
    echo "no_CB_SIT" . ",";
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

$sql = "select Cr_VC from Classroom where Cr_Name = '$Cr_Name'";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$Cr_VC = $result['Cr_VC'];

$sql1 = "select * from ContactBook where CB_SId = '$Cr_VC'";
$rows1 = mysqli_query($bd, $sql1);
$result1 = mysqli_fetch_assoc($rows1);
$CB_SId = $result1['CB_SId'];
$num1  = mysqli_num_rows($rows1);
// var_dump($UA_Acu);
// var_dump($sql1);
// die;
if ($num1 != 0) {
    $sql = "UPDATE ContactBook SET  CB_CIT = '$CB_CIT', CB_SIT = '$CB_SIT' where CB_SId = '$Cr_VC'";
    $rows = mysqli_query($bd, $sql);
}else{
    $sql = "insert into ContactBook (CB_SId, CB_CIT, CB_SIT) values ('$Cr_VC', '$CB_CIT', '$CB_SIT')";
    $rows = mysqli_query($bd, $sql);
}
    


echo "}";



