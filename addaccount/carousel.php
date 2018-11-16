<?php
include '../transcript/carouselselect.php';
// session_start();
if($_SESSION["name"] == null){
  header("location:../login.php"); 
}
?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/carousel.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
<body>



<div class="bg" >

  <img src="../file/background/carousel.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form method="POST"  action="../fileuplo/upload-file/caruselupload.php" enctype="multipart/form-data" style="position: relative;top: 60px;">
<div class="font" align="center">Carousel Add</div>
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
			echo '<a class="nav-item nav-link navpage" href="../addaccount/mmaintain.php">系統維護</a>';
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

<!-- <div class="form-group" id="app">
            <label for="C_CN">Company</label>
            <select class="form-control" name="C_CN" id="C_CN" style="font-size:24px;height:50px;" v-model="selectedClass"> -->
                <!-- <option v&#45;for="value in classes">{{ value }}</option> -->
                <!-- <option v-for="groupedClass in Object.keys(groupedClasses)">{{ groupedClass }}</option>
            </select>
  </div> -->
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload1" placeholder="Slide 1" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn1" type="file" class="upload" name="uploadBtn1">
    </div>
    <!-- </label> -->
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload2" placeholder="Slide 2" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn2" type="file" class="upload" name="uploadBtn2">
    </div>
    <!-- </label> -->
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload3" placeholder="Slide 3" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn3" type="file" class="upload" name="uploadBtn3">
    </div>
    <!-- </label> -->
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload4" placeholder="Slide 4" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn4" type="file" class="upload" name="uploadBtn4">
    </div>
    <!-- </label> -->
  </div>
  <div class="form-group">
    <!-- <label for="fileToUpload">Head shot</label> -->
    <!-- <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;"> -->
    <!-- <input id="fileToUpload" style="display:block;" type="file" name="fileToUpload"> -->

    <input id="fileToUpload5" placeholder="Slide 5" readonly style="border-radius:10px;">
    <div class="fileUpload btn btn-info" style="background: rgba(170, 175, 175, 0.4);border:2px #ccc;border-radius:10px;font-size:24px;">
        <span>Choose File</span>
        <input id="uploadBtn5" type="file" class="upload" name="uploadBtn5">
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
document.getElementById("uploadBtn1").onchange = function () {
  document.getElementById("fileToUpload1").value = this.value;
};
document.getElementById("uploadBtn2").onchange = function () {
  document.getElementById("fileToUpload2").value = this.value;
};
document.getElementById("uploadBtn3").onchange = function () {
  document.getElementById("fileToUpload3").value = this.value;
};
document.getElementById("uploadBtn4").onchange = function () {
  document.getElementById("fileToUpload4").value = this.value;
};
document.getElementById("uploadBtn5").onchange = function () {
  document.getElementById("fileToUpload5").value = this.value;
};
</script>
<script>
var Company = <?php echo json_encode($Company->toArray()); ?>;
var groupedClasses = _.groupBy(Company, 'C_CN');
var vue = new Vue({
    el: '#app',
    data: {
        classes: ['class A', 'class B', 'class C'],
        groupedClasses: groupedClasses,
        selectedClass: null,
        selectedStudent: null
    },

});
</script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/allbutton.js"></script>
</html>