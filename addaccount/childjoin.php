<?php

session_start();
if($_SESSION["name"] == null){
  header("location:../login.php"); 
}
?>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../CSS/childadd.css">
        <link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
        <link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
    </head>
    <body>

<!-- ---------- -->
<?php include '../addaccount/rand.php';?>

<!-- ---------- -->
  <div class="bg" >

    <img src="../file/background/childadd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>
<form method="POST"  action="" class="wow bounceIn" style="position: relative;top: 60px;">
<div class="font" align="center">Child Add</div>
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
              echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
              // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
            } elseif ($UA_PL == '1') {
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
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
echo "\"UA_PC\":";
if (isset($_POST["UA_Acu"])) {
    $UA_Acu = $_POST["UA_Acu"];
    echo $UA_Acu . ",";
} else {
    echo "no_UA_Acu" . ",";
}
echo "\"UA_PL\":";
if (isset($_POST["UA_PL"])) {
    $UA_PL = $_POST["UA_PL"];
    echo $UA_PL . ",";
} else {
    echo "no_UA_PL" . ",";
}
echo "\"Cr_Name\":";
if (isset($_POST["Cr_Name"])) {
    $Cr_Name = $_POST["Cr_Name"];
    echo $Cr_Name . ",";
} else {
    echo "no_Cr_Name" . ",";
}
echo "\"S_Name\":";
if (isset($_POST["S_Name"])) {
    $S_Name = $_POST["S_Name"];
    echo $S_Name . ",";
} else {
    echo "no_S_Name" . ",";
}
echo "\"UA_Name\":";
if (isset($_POST["UA_Name"])) {
    $UA_Name = $_POST["UA_Name"];
    echo $UA_Name . ",";
} else {
    echo "no_UA_Name" . ",";
}
echo "\"S_Phone\":";
if (isset($_POST["S_Phone"])) {
    $S_Phone = $_POST["S_Phone"];
    echo $S_Phone . ",";
} else {
    echo "no_S_Phone" . ",";
}
echo "\"UA_Psw\":";
if (isset($_POST["UA_Psw"])) {
    $UA_Psw = $_POST["UA_Psw"];
    echo $UA_Psw . ",";
} else {
    echo "no_UA_Psw" . ",";
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


$sql = "select * from UserAccount where UA_Acu = '$S_Phone'";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$num  = mysqli_num_rows($rows);
// var_dump($num);
// die;
if ($num != 0){
    $sql = "Insert Into Student (S_Name,S_Phone) Values ( '$S_Name', '$S_Phone')";
    $rows = mysqli_query($bd, $sql);
    $sql1 = "select S_Id, S_Name from Student where S_Name = '$S_Name'";
    $rows1 = mysqli_query($bd, $sql1);
    $result1 = mysqli_fetch_assoc($rows1);
    $sql2 = "select Cr_Id, Cr_Name from Classroom where Cr_Name = '$Cr_Name'";
    $rows2 = mysqli_query($bd, $sql2);
    $result2 = mysqli_fetch_assoc($rows2);
    $sql3 = "Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values ($result2[Cr_Id], '$Cr_Name', $result1[S_Id], '$S_Name')";
    $rows3 =  mysqli_query($bd, $sql3);
    // var_dump($result1['S_Name']);
    // die;
}else {

    $sql = "select UA_CVC from UserAccount where UA_Acu = '$UA_Acu'";
    $rows = mysqli_query($bd, $sql);
    $result = mysqli_fetch_assoc($rows);
    // $num  = mysqli_num_rows($rows);
    // var_dump($result['UA_CVC']);
    // die;
    $sql1 = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC) Values ( '$UA_PL','$S_Phone','$UA_Psw','$UA_Name','$S_Phone','$UA_Psw','$result[UA_CVC]')";
    $rows1 = mysqli_query($bd, $sql1);
    $sql2 = "Insert Into Student (S_Name,S_Phone) Values ( '$S_Name', '$S_Phone')";
    $rows2 =  mysqli_query($bd, $sql2);
    $sql3 = "select S_Id, S_Name from Student where S_Name = '$S_Name'";
    $rows3 = mysqli_query($bd, $sql3);
    $result3 = mysqli_fetch_assoc($rows3);
    $sql4 = "select Cr_Id, Cr_Name from Classroom where Cr_Name = '$Cr_Name'";
    $rows4 = mysqli_query($bd, $sql4);
    $result4 = mysqli_fetch_assoc($rows4);
    $sql5 = "Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values ($result4[Cr_Id], '$Cr_Name', $result3[S_Id], '$S_Name')";
    $rows5 =  mysqli_query($bd, $sql5);

}

echo "}";



