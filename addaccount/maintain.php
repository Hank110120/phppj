<?php
session_start();
if($_SESSION["name"] == null){
  header("location:../login.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
		<link rel="stylesheet" type="text/css" href="../CSS/maintain.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../resource/bootstrap-4.1.1-dist/css/bootstrap.min.css">
		<link href="../resource/bootstrap-4.1.1-dist/fonts/css.css" rel="stylesheet">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<script language="JavaScript">
	function act1() {
		document.choiceForm.action = "../addaccount/teachercontact.php";
		document.choiceForm.submit();

	}
	function act2() {
		document.choiceForm.action = "../addaccount/company.php";
		document.choiceForm.submit();

	}
	function act3() {
		document.choiceForm.action = "../addaccount/childadd.php";
		document.choiceForm.submit();

	}
	function act4() {
		document.choiceForm.action = "../addaccount/classadd.php";
		document.choiceForm.submit();

	}
	function act5() {
		document.choiceForm.action = "../addaccount/boardadd.php";
		document.choiceForm.submit();

	}
	function act6() {
		document.choiceForm.action = "../addaccount/teacherinfoadd.php";
		document.choiceForm.submit();

	}
	function act7() {
		document.choiceForm.action = "../transcript/transcript.php";
		document.choiceForm.submit();

	}
	function act8() {
		document.choiceForm.action = "../addaccount/carousel.php";
		document.choiceForm.submit();

	}
	function act9() {
		document.choiceForm.action = "../transcript/transcriptadd.php";
		document.choiceForm.submit();

	}
	function act10() {
		document.choiceForm.action = "../contactbook/contactbook.php";
		document.choiceForm.submit();

	}
</script>

<body>
	<form name="choiceForm" method="post" action="">

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
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
					echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
					echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
					// echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.html">系統維護</a>';
					// echo '<a class="nav-item nav-link navpage" href="#context us">聯絡我們</a>';
				} elseif ($UA_PL == '1') {
					echo '<a class="nav-item nav-link navpage" href="../index.php">首頁</a>';
					// echo '<a class="nav-item nav-link navpage" href="#accordion">師資介紹</a>';
					// echo '<a class="nav-item nav-link navpage" href="#nav-tab">佈告欄</a>';
					echo '<a class="nav-item nav-link navpage" href="../addaccount/teachercontact.php">聯絡簿</a>';
					echo '<a class="nav-item nav-link navpage" href="../transcript/transcript.php">成績單</a>';
					// echo '<a class="nav-item nav-link navpage" href="../addaccount/maintain.html">系統維護</a>';
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


	<?php include '../config.php';?>
		<?php
if ($result) {
	$UA_PL = $result['UA_PL'];
	if ($UA_PL == '0') {
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act2();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									公司資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act3();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									學生資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act4();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									教室資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act5();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									佈告欄資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act6();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									師資介紹維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act8();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									輪播圖資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act9();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									學生成績資料維護
								</button>
							</div>
						</div>
						';
		} elseif ($UA_PL == '1') {
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act3();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									學生資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act4();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									教室資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act5();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									佈告欄資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act6();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									師資介紹維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act8();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									輪播圖資料維護
								</button>
							</div>
						</div>
						';
			echo
				'
						<div class="cen">
							<div class="submitBtn">
								<button onclick="act9();" type="submit" class="btn btn-default cen" style="font-family: Hi Melody, cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">
									學生成績資料維護
								</button>
							</div>
						</div>
						';
		}
}
?>

	</form>

</body>
<script src="../JS/jquery-3.3.1.min.js"></script>
<script src="../resource/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
<script src="../JS/allbutton.js"></script>
</html>