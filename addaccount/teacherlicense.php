<?php
session_start();

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/teacherlicense.css">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/animate/animate.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<body>

<!-- <div class="font" align="center">License Check</div> -->
  <div class="bg" >

    <img src="../file/background/teacherlicense.jpg" class="img-responsive" alt="Responsive image" width="100%/9;">
  </div>
<form method="POST"  action="teacheradd.php" class="wow bounceIn" style="position: relative;top: 80px;">

<div class="font" align="center" >License Check</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mb-0 h1" href="#">
      <img src="../file/logo/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      公司驗證碼驗證
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
    <label for="UA_VC1">Company License</label>
    <input type="text" class="form-control" name="UA_VC1" id="UA_VC1" placeholder="Enter your company license"
    style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="identity">Identity</label>
    <input type="text" class="form-control" id="identity" name="identity" readonly="readonly"
    value="T" style="font-size:24px">
  </div>
  <div class="cen" >
      <div class="submitBtn">
        <button type="submit" id="btn" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4) ;width:300px;font-size:32px;color:white;">Submit</button>
      </div>
   </div>
</form>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init(); </script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../JS/allbutton.js"></script>
</body>

</html>


