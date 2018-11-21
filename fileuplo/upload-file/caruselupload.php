<?php
// include '../transcript/carouselselect.php';
session_start();
if($_SESSION["name"] == null){
  header("location:../../login.php"); 
}
?>
<html>
<link rel="stylesheet" type="text/css" href="../../CSS/carousel.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
<body>



<div class="bg" >

  <img src="../../file/background/carousel.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form method="POST"  action="" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Carousel Add</div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      <?php include '../../SQL/datause.php';?>
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

        <?php include '../../config.php';?>
        <?php
        if ($result) {
          $UA_PL = $result['UA_PL'];
          if ($UA_PL == '0') {
			echo '<a class="nav-item nav-link navpage" href="../../index.php">首頁</a>';
			// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
			// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
			echo '<a class="nav-item nav-link navpage" href="../../addaccount/teachercontact.php">聯絡簿</a>';
			echo '<a class="nav-item nav-link navpage" href="../../transcript/transcript.php">成績單</a>';
			echo '<a class="nav-item nav-link navpage" href="../../addaccount/maintain.php">系統維護</a>';
			// echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
		} elseif ($UA_PL == '1') {
			echo '<a class="nav-item nav-link navpage" href="../../index.php">首頁</a>';
			// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
			// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
			echo '<a class="nav-item nav-link navpage" href="../../addaccount/teachercontact.php">聯絡簿</a>';
			echo '<a class="nav-item nav-link navpage" href="../../transcript/transcript.php">成績單</a>';
			echo '<a class="nav-item nav-link navpage" href="../../addaccount/mmaintain.php">系統維護</a>';
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
        <a class="nav-item nav-link navpage" href="../../logout.php"><span class="glyphicon glyphicon-log-in"></span>
          Logout</a>

      </div>
    </div>
</nav>
<?php


use League\Csv\Reader;

// ----------------- upload file ---------------------

$bossHeadDir = "../../file/bosshead/";
$logoDir = "../../file/logo/";
$backGroundDir = "../../file/background/";
$boardDir = "../../file/board/";
$slideDir = "../../file/slide/";
$teacherHeadDir = "../../file/teacherhead/";
$csvDir = "../../file/csv/";
// $ = "../../file//";


$slideFile1 = $slideDir . basename($_FILES["uploadBtn1"]["name"]);
$slideFile2 = $slideDir . basename('1.jpg');

$slideFile3 = $slideDir . basename($_FILES["uploadBtn2"]["name"]);
$slideFile4 = $slideDir . basename('2.jpg');

$slideFile5 = $slideDir . basename($_FILES["uploadBtn3"]["name"]);
$slideFile6 = $slideDir . basename('3.jpg');

$slideFile7 = $slideDir . basename($_FILES["uploadBtn4"]["name"]);
$slideFile8 = $slideDir . basename('4.jpg');

$slideFile9 = $slideDir . basename($_FILES["uploadBtn5"]["name"]);
$slideFile10 = $slideDir . basename('5.jpg');



$uploadOk1 = 1;

$uploadOk2 = 1;

$uploadOk3 = 1;

$uploadOk4 = 1;

$uploadOk5 = 1;

$slideType1 = strtolower(pathinfo($slideFile1, PATHINFO_EXTENSION));
$slideType2 = strtolower(pathinfo($slideFile3, PATHINFO_EXTENSION));
$slideType3 = strtolower(pathinfo($slideFile5, PATHINFO_EXTENSION));
$slideType4 = strtolower(pathinfo($slideFile7, PATHINFO_EXTENSION));
$slideType5 = strtolower(pathinfo($slideFile9, PATHINFO_EXTENSION));



// Check if image file is a actual image or fake image
// Check if file already exists
// if (file_exists($targetFile)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
if ($_FILES["uploadBtn1"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}

if ($_FILES["uploadBtn2"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}

if ($_FILES["uploadBtn3"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk3 = 0;
}

if ($_FILES["uploadBtn4"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk4 = 0;
}

if ($_FILES["uploadBtn5"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk5 = 0;
}



// // Allow certain file formats
if ($slideType1 != 'jpg' && $slideType1 != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}

if ($slideType2 != 'jpg' && $slideType2 != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}

if ($slideType3 != 'jpg' && $slideType3 != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}

if ($slideType4 != 'jpg' && $slideType4 != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}

if ($slideType5 != 'jpg' && $slideType5 != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn1"]["tmp_name"], $slideFile2)) {
        echo "The file ". basename($_FILES["uploadBtn1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn2"]["tmp_name"], $slideFile4)) {
        echo "The file ". basename($_FILES["uploadBtn2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk3 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn3"]["tmp_name"], $slideFile6)) {
        echo "The file ". basename($_FILES["uploadBtn3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk4 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn4"]["tmp_name"], $slideFile8)) {
        echo "The file ". basename($_FILES["uploadBtn4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk5 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn5"]["tmp_name"], $slideFile10)) {
        echo "The file ". basename($_FILES["uploadBtn5"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
