<?php
include '../transcript/carouselselect.php';
// session_start();
if($_SESSION["name"] == null){
  header("location:../login.php"); 
}
?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/boardadd.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
<body>



<div class="bg" >

  <img src="../file/background/carousel.jpg" class="img-responsive" alt="Responsive image" width="100%\9;">
  </div>

<form method="POST"  action="Carouseljoin.php" enctype="multipart/form-data" style="position: relative;top: 60px;">
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

<div class="form-group" id="app">
            <label for="C_CN">Company</label>
            <select class="form-control" name="C_CN" id="C_CN" style="font-size:24px;height:50px;" v-model="selectedClass">
                <!-- <option v&#45;for="value in classes">{{ value }}</option> -->
                <option v-for="groupedClass in Object.keys(groupedClasses)">{{ groupedClass }}</option>
            </select>
  </div>
  <div class="form-group">
    <label for="Slide_1">Slide 1</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="Slide_1" style="display:none;" type="file" name="Slide_1">
    Choice File
    </label>
  </div>
  <div class="form-group">
    <label for="Slide_2">Slide 2</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="Slide_2" style="display:none;" type="file" name="Slide_2">
    Choice File
    </label>
  </div>
  <div class="form-group">
    <label for="Slide_3">Slide 3</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="Slide_3" style="display:none;" type="file" name="Slide_3">
    Choice File
    </label>
  </div>
  <div class="form-group">
    <label for="Slide_4">Slide 4</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="Slide_4" style="display:none;" type="file" name="Slide_4">
    Choice File
    </label>
  </div>
  <div class="form-group">
    <label for="Slide_5">Slide 5</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="Slide_5" style="display:none;" type="file" name="Slide_5">
    Choice File
    </label>
  </div>
  <div class="cen" >
      <div class="submitBtn">
        <button id="btn" type="submit" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4);width:300px;font-size:32px;color:white;">Submit</button>
      </div>
  </div>


</form>
</body>
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