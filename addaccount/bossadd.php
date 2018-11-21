<?php
session_start();

?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/bossadd.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<body>

<!-- ---------- -->
<?php include 'rand.php';?>
<!-- ---------- -->
<div class="bg" >

  <img src="../file/background/bossadd.jpg" class="img-responsive" alt="Responsive image" width="100%\9;" style="filter:brightness(0.9);">
  </div>

<form method="POST"  action="../fileuplo/upload-file/bossaddupload.php" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Boss Add</div>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      負責人&公司資料建置
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
    <label for="UA_PL">Privilege</label>
    <input type="number" class="form-control" id="UA_PL" name="UA_PL" readonly="readonly" value="0" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="identity">Identity</label>
    <input type="text" class="form-control" id="identity" name="identity" readonly="readonly" value="B" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_VC">Company license</label>
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
    <label for="UA_Psw">User Password</label>
    <input type="password" class="form-control" name="UA_Psw" id="UA_Psw" placeholder="password" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Phone">Phone Number</label>
    <input type="number" class="form-control" name="UA_Phone" id="UA_Phone" placeholder="phnumber" style="font-size:24px">
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload" placeholder="Head shot" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn" type="file" class="upload" name="uploadBtn">
    </div>
    <!-- </label> -->
  </div>

  <div class="form-group">
    <label for="C_CN">Company Name</label>
    <input type="text" class="form-control" name="C_CN" id="C_CN" placeholder="CPName" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="C_CP">Company Number</label>
    <input type="number" class="form-control" name="C_CP" id="C_CP" placeholder="CPNumber" style="font-size:24px">
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload2">Company Logo</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload2" style="display:none;" type="file" name="fileToUpload2"> -->
    <input id="fileToUpload2" placeholder="Company Logo" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn1" type="file" class="upload" name="uploadBtn1">
    </div>
    </label>
  </div>
  
</form>
<script>
document.getElementById("uploadBtn").onchange = function () {
  document.getElementById("fileToUpload").value = this.value;
};

document.getElementById("uploadBtn1").onchange = function () {
  document.getElementById("fileToUpload2").value = this.value;
};

</script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/allbutton.js"></script>
</body>
</html>