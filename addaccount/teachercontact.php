<?php
session_start();

?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/teachercontact.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<body>

<!-- ---------- -->

<!-- ---------- -->
<div class="bg" >

  <img src="../file/background/teachercontactselect.jpg" class="img-responsive" alt="Responsive image" width="100%\9;" style="filter:brightness(0.9);">
  </div>
  <form name="choiceForm" method="post" action="" style="position: relative;top: 60px;">
<div class="font" align="center">Character Choice</div>
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
	<!-- <form method="POST"  action="bossadd.php">
    	<img src="../IMAGES/normal_1295.png" alt="">
    	<button name="identity" type="submit" value="B">我是老闆</button>
	</form>
	<form method="POST"  action="teacherlicense.php">
    	<img src="../IMAGES/normal_3206.png" alt="">
    	<button name="identity" type="submit" value="T">我是老師</button>
	</form> -->
	<!-- <form method="post" action="">
		<button type="button"><img src="../IMAGES/normal_1295.png" onclick="location.href='./bossadd.php'">
			<p>我是老闆</p>
		</button>
		<button type="button"><img src="../IMAGES/normal_3206.png" onclick="location.href='./teacherlicense.php'">
			<p>我是老師</p>
		</button>
		<button name="chidentity" value="P" type="button"><img src="../IMAGES/normal_725.png" onclick="location.href='./childadd.php'">
			<p>我是學生</p>
		</button>
	</form> -->

	<div class="cen" >
		<div class="submitBtn">
			<button id="btn" onclick="act1();" type="submit" class="btn btn-default cen" style="margin:10px;font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4);width:300px;font-size:32px;color:white;">聯絡本</button>
		</div>
	</div>
	<div class="cen" >
		<div class="submitBtn">
			<button id="btn1" onclick="act2();" type="submit" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.4);width:300px;font-size:32px;color:white;">留言板</button>
		</div>
	</div>
		


		<!-- <input type="button" name="Button" value="Act1" onClick="act1();">
		<input type="button" name="Submit2" value="Act2" onClick="act2();"> -->
	</form>

</body>
<script language="JavaScript">
	function act1() {
		document.choiceForm.action = "../contactbook/contactteacher.php";
		document.choiceForm.submit();

	}
	function act2() {
		document.choiceForm.action = "../contactbook/messageteacher.php";
		document.choiceForm.submit();

	}

</script>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/allbutton.js"></script>
</html>