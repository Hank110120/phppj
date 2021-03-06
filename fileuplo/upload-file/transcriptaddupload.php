<?php
// include '../transcript/carouselselect.php';
session_start();
if($_SESSION["name"] == null){
  header("location:../../login.php"); 
}
?>
<html>
<link rel="stylesheet" type="text/css" href="../../CSS/transcriptadd.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
<body>



<div class="bg" >

  <img src="../../file/background/transcriptadd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
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
			echo '<a class="nav-item nav-link navpage" href="../../addaccount/maintain.php">系統維護</a>';
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
// include '../../transcript/transcriptaddjoin.php';

use League\Csv\Reader;



//The first question:empty_input
//The second question:password_error
//The third question:"The_Account_has_been_registered"
//The fourth question:The_Email_has_been_registered
$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";


// ------------教室--------------
// ------------教室--------------
// ------------教室--------------


if ($_POST["uploadchoice"] == 0) {

$targetDir = "../../file/csv/";
$targetFile = $targetDir . basename($_FILES["uploadBtn"]["name"]);
$targetFile1 = $targetDir . basename('transcript.csv');
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
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
// // Allow certain file formats
if ($fileType != 'csv') {
    echo "Sorry, only CSV files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn"]["tmp_name"], $targetFile1)) {
        echo "The file ". basename($_FILES["uploadBtn"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// -------------- read file ------------------
include '../read-file/index.php';

$csv = Reader::createFromPath($targetFile1, 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

    
} else {
    echo "{";
        echo "\"SC_CN\":";
        if (isset($_POST["SC_CN"])) {
            $SC_CN = $_POST["SC_CN"];
            echo $SC_CN . ",";
        } else {
            echo "no_SC_CN" . ",";
        }
        
        echo "\"SC_SN\":";
        if (isset($_POST["SC_SN"])) {
            $SC_SN = $_POST["SC_SN"];
            echo $SC_SN . ",";
        } else {
            echo "no_SC_SN" . ",";
        }
        
        echo "\"F_Subject\":";
        if (isset($_POST["F_Subject"])) {
            $F_Subject = $_POST["F_Subject"];
            echo $F_Subject . ",";
        } else {
            echo "no_F_Subject" . ",";
        }
        
        echo "\"F_Fraction\":";
        if (isset($_POST["F_Fraction"])) {
            $F_Fraction = $_POST["F_Fraction"];
            echo $F_Fraction . ",";
        } else {
            echo "no_F_Fraction" . ",";
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
        $sql = "SELECT S_Id FROM Student WHERE S_Name = '$SC_SN'";
        $rows = mysqli_query($bd, $sql);
        $result = mysqli_fetch_assoc($rows);
        $S_Id = $result['S_Id'];
        // var_dump($result['S_Id']);
        // die;
        $sql1 = "SELECT Cr_Id FROM Classroom WHERE Cr_Name = '$SC_CN'";
        $rows1 = mysqli_query($bd, $sql1);
        $result1 = mysqli_fetch_assoc($rows1);
        $Cr_Id = $result1['Cr_Id'];
        
        // var_dump($Cr_Name);
        // die;
        $sql = "INSERT INTO Fraction (F_CrId, F_CrN, F_SId, F_SN, F_Fraction, F_Subject) VALUES ('$Cr_Id', '$SC_CN', '$S_Id', '$SC_SN', '$F_Fraction', '$F_Subject')";
        $rows = mysqli_query($bd, $sql);
        
        
        echo "}";
}










// ----------------- upload file ---------------------
