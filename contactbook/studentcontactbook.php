<?php
session_start();
// $_POST["SC_CN"] = $_SESSION["SC_CN"];
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

// ------------學生--------------
// ------------學生--------------
// ------------學生--------------



// echo "{";
// echo "\"SC_SN\":";
if (isset($_SESSION["name"])) {
  $UA_Acu = $_SESSION["name"];
  // echo $SC_SN . ",";
} else {
  echo "no_UA_Acu" . ",";
}
if (isset($_POST["SC_SN"])) {
    $SC_SN = $_POST["SC_SN"];
    // echo $SC_SN . ",";
} else {
    echo "no_SC_SN" . ",";
}

// echo "\"SC_CN\":";
if (isset($_POST["SC_CN"])) {
  $SC_CN = $_POST["SC_CN"];
  // echo $SC_CN . ",";
} else {
  echo "no_SC_CN" . ",";
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

$sql = "SELECT * FROM ContactBook WHERE CB_SId = (SELECT Cr_VC FROM Classroom WHERE Cr_Name = '$SC_CN')";
$rows = mysqli_query($bd, $sql);
$result = mysqli_fetch_assoc($rows);
$CB_CIT = $result['CB_CIT'];
$CB_SIT = $result['CB_SIT'];
// var_dump($CB_CIT);
// die;


// echo "}";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>聯絡簿</title>

  <link rel="stylesheet" href="../CSS/contactbook.css">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">



</head>

<body style="overflow:auto;">

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
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
              // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
            } elseif ($UA_PL == '1') {
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.php">系統維護</a>';
              // echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
            } else {
              echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
              // echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
              // echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
              // echo '<a class="nav-item nav-link navpage" href="../contactbook/contactbook.php">聯絡簿</a>';
              echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
              echo '<a class="nav-item nav-link navpage" href="./addaccount/parentPw.php">密碼修改</a>';
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

  <div class="container">
    <div id="accordion" style="position: relative;top: 60px;" >
      <div class="">
        <div class="card-header" id="headingOne" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              今日作業 & 明日準備
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <div class="flexbox">
              <div class="item">
                <div class="data1">
                  <h2>今日作業</h2>

                  <?php
                  
                      echo $CB_CIT;
                  
                  ?>
                </div>
              </div>
              <div class="item">
                <div class="data1">
                  <h2>明日準備</h2>

                  <?php
                  
                  echo $CB_SIT;

                  
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="card-header" id="headingTwo" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              親師交流
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <div class="flexbox">
              <div class="item">
              <?php
                
                error_reporting(0);
                $SC_CN = $_POST[SC_CN];
                $SC_SN = $_POST[SC_SN];
                $UA_Name = $_POST[UA_Name];
                $news = $_POST[bnews];

                $bd = mysqli_connect($servername, $username, $password, $database);
                $sql = "insert into bt1(no,mess_CN,mess_SN,mess_OJ,news)values(null,'$SC_CN','$UA_Name','2','$news')";
                $rows = mysqli_query($bd, $sql);
                include "b_index.php";
                ?>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="card-header" id="headingThree" style="border-bottom:1px white;">
          <h5 class="mb-0">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              檔案傳輸
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <div class="form-group">
              <!-- <label for="UA_Avatar">Head shot</label> -->
              <label class="btn btn-info btn-block" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
              <input id="UA_Avatar" style="display:none;" type="file" name="UA_Avatar">
              Choice File
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






</body>
<script src="../JS/jquery-3.3.1.min.js"></script>
  <script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
</html>