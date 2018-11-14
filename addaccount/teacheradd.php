<?php
session_start();
?>

<?php

$servername = '220.135.97.54:3307';
$username = 'root';
$password = 'jacky110120';
$database = 'team3';

// echo "\"UA_VC1\":";
if (isset($_POST["UA_VC1"])) {
	$UA_VC1 = $_POST["UA_VC1"];
	// echo $UA_VC1.",";
} else {
	echo "no_UA_VC1" . ",";
}


$bd = mysqli_connect($servername, $username, $password, $database);
if (!$bd) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select * From UserAccount Where UA_VC='$UA_VC1'";

$rows = mysqli_query( $bd,$sql );
$num = mysqli_num_rows($rows);
if ($num <> 0) {
    
}else{
    header('Location: teacherlicense.php');
}
?>





<html>
<link rel="stylesheet" type="text/css" href="../CSS/teacheradd.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">

<body>




<!-- ---------- -->
<?php include 'rand.php';?>

<!-- ---------- -->
<div class="bg" >
  <img src="../file/background/teacheradd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form  method="POST"  action="../fileuplo/upload-file/teacherupload.php" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center" >Teacher Add</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      教師資料建置
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav burger-center">

        
        <a class="nav-item nav-link navpage" href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>
          Login</a>

      </div>
    </div>
</nav>


  <div class="form-group">
      <label for="cplicense">License</label>
      <input type="text" class="form-control" name="cplicense" id="cplicense" readonly="readonly" value="<?php echo $_POST['UA_VC1'] ?>" style="font-size:24px">
  </div>
  
  <div class="form-group">
      <label for="UA_PL">Privilege</label>
      <input type="text" class="form-control" name="UA_PL" id="UA_PL" readonly="readonly" value="1" style="font-size:24px">
  </div>
  <div class="form-group">
      <label for="identity">Identity</label>
      <input type="text" class="form-control" name="identity" id="identity" readonly="readonly" value="<?php echo $_POST["identity"]; ?>" style="font-size:24px">
      <!-- <input type="text" class="form-control" name="Identity" id="Identity" readonly="readonly" value="T" style="font-size:24px"> -->
  </div>
  <div class="form-group">
      <label for="UA_VC">Teacher License</label>
      <input type="text" class="form-control" name="UA_VC" id="UA_VC" readonly="readonly" value="<?php echo $UA_VC; ?>" style="font-size:24px">
  </div>
  <div class="form-group">
      <label for="UA_Acu">User Account</label>
      <input type="text" class="form-control" name="UA_Acu" id="UA_Acu" placeholder="account" style="font-size:24px">
  </div>
  <div class="form-group">
      <label for="UA_Name">User Name</label>
      <input type="text" class="form-control" name="UA_Name" id="UA_Name" placeholder="USER NAME" style="font-size:24px">
  </div>
  <div class="form-group">
      <label for="UA_Psw">Password</label>
      <input type="password" class="form-control" name="UA_Psw" id="UA_Psw" placeholder="password" style="font-size:24px">
  </div>
  <div class="form-group">
      <label for="UA_Phone">Phone</label>
      <input type="number" class="form-control" name="UA_Phone" id="UA_Phone" placeholder="phnumber" style="font-size:24px">
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload3" placeholder="Head shot" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn2" type="file" class="upload" name="uploadBtn2">
    </div>
    <!-- </label> -->
  </div>
  <div class="cen" >
      <div class="submitBtn">
        <button id="btn" type="submit" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4);width:300px;font-size:32px;color:white;">Submit</button>
      </div>
  </div>


</form>
</body>
<script>
document.getElementById("uploadBtn2").onchange = function () {
  document.getElementById("fileToUpload3").value = this.value;
};
</script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/allbutton.js"></script>
</html>


  <p align="center">&nbsp;</p>
  <p align="center">&nbsp; </p>