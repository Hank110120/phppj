<?php
// session_start();

?>
<html>
<link rel="stylesheet" type="text/css" href="../../CSS/bossadd.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<body>

<!-- ---------- -->

<!-- ---------- -->
<div class="bg" >

  <img src="../../file/background/bossadd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;" style="filter:brightness(0.9);">
  </div>

<form method="POST"  action="" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Boss Add</div>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      負責人&公司資料建置
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav burger-center">

        <a class="nav-item nav-link navpage" href="../../logout.php"><span class="glyphicon glyphicon-log-in"></span>
          Login</a>

      </div>
    </div>
  </nav>
<?php
include '../../addaccount/bossjoin.php';
// include '../../addaccount/teacherjoin.php';

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

$bossFile = $bossHeadDir . basename($_FILES["uploadBtn"]["name"]);
$bossFile1 = $bossHeadDir . basename('1.jpg');

$logoFile = $logoDir . basename($_FILES["uploadBtn1"]["name"]);
$logoFile1 = $logoDir . basename('logo.jpg');

// $teacherFile = $teacherHeadDir . basename($_FILES["uploadBtn2"]["name"]);
// $teacherFile1 = $teacherHeadDir . basename('logo.jpg');


$uploadOk = 1;

$uploadOk1 = 1;

// $uploadOk2 = 1;

$bossType = strtolower(pathinfo($bossFile, PATHINFO_EXTENSION));

$logoType = strtolower(pathinfo($logoFile, PATHINFO_EXTENSION));

// $teacherType = strtolower(pathinfo($teacherFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// Check if file already exists
// if (file_exists($targetFile)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
if ($_FILES["uploadBtn"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($_FILES["uploadBtn1"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}

// if ($_FILES["uploadBtn2"]["size"] > 5000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk2 = 0;
// }

// // Allow certain file formats
if ($bossType != 'jpg' && $bossType != 'png') {
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk = 0;
}
if ($logoType != 'jpg' && $logoType != 'png'){
    echo "Sorry, only jpg & png files are allowed.";
    $uploadOk1 = 0;
}
// if ($teacherType != 'jpg' && $teacherType != 'png'){
//     echo "Sorry, only jpg & png files are allowed.";
//     $uploadOk2 = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn"]["tmp_name"], $bossFile1)) {
        echo "The file ". basename($_FILES["uploadBtn"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn1"]["tmp_name"], $logoFile1)) {
        echo "The file ". basename($_FILES["uploadBtn1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// if ($uploadOk2 == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["uploadBtn2"]["tmp_name"], $teacherFile)) {
//         echo "The file ". basename($_FILES["uploadBtn2"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }


// include '../read-file/index.php';
// // -------------- read file ------------------
// $csv = Reader::createFromPath($targetFile, 'r');
// $csv->setHeaderOffset(0);

// $header = $csv->getHeader(); //returns the CSV header record
// $records = $csv->getRecords(); //returns all the CSV records as an Iterator object
