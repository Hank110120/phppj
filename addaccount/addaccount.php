<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<script language="JavaScript">
	function act1() {
		document.choiceForm.action = "./bossadd.php";
		document.choiceForm.submit();

	}
	function act2() {
		document.choiceForm.action = "./teacherlicense.php";
		document.choiceForm.submit();

	}

</script>

<body>
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

	<form name="choiceForm" method="post" action="">
		<button type="button"><img src="../IMAGES/normal_1295.png" onclick="act1();">
			<p>我是老闆</p>
		</button>
		<button type="button"><img src="../IMAGES/normal_3206.png" onclick="act2();">
			<p>我是老師</p>
		</button>

		<!-- <input type="button" name="Button" value="Act1" onClick="act1();">
		<input type="button" name="Submit2" value="Act2" onClick="act2();"> -->
	</form>

</body>

</html>