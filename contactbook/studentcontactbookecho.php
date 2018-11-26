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



$news = $_POST[bnews];
                    if($news != null){
                      $bd = mysqli_connect($servername, $username, $password, $database);
                      $sql2 = "insert into bt1(no,mess_CN,mess_SN,mess_OJ,news)values(null,'$SC_CN','$SC_SN','2','$news')";
                      $rows2 = mysqli_query($bd, $sql2);
                      header("location:studentcontactbook.php");
                    }
                    

// var_dump($CB_CIT);
// die;


// echo "}";
?>
