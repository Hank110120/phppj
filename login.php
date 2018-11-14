<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<link href="CSS/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="JS/bootstrap.min.js"></script>
	<script src="JS/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="CSS/main.css">
<title>PHP與MySQL建立網頁資料庫</title>
</head>
<body>
<?php include 'SQL/config.php';?>
<form action="login.php" method="post" >
  <section style="height: 50vh;">
	    <div style="background-image: url(); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
	    <div class="baslik">
	        <b style="font-size: 101px; text-align: center; margin-bottom: -21px; display: block;">LOGO</b>
	        <span style="font-size: 26px; text-align: center; display: block; margin-bottom: 25px;">Hello!World</span>
	    </div>
	    <section>
	    <form method="post" action="">
	        <div class="arkalogin">
	            <div class="loginbaslik">使用者登入</div>
	            <hr style="border: 1px solid #ccc;">
	            <input class="giris" type="text" name="UA_Acu" placeholder="User">
	            <input class="giris" type="password" name="UA_Psw" placeholder="•••••">
	            <input class="butonlogin" type="submit" name="" value="登入" >
	            <!-- <input class="butonlogin" type="submit" name="" value="註冊" ><a href="addaccount/name.php"></a> -->
	            <a href="addaccount/addaccount.php" style="position: relative;top: 5px;font-size: 20px;">註冊</a>
	            <!-- <a href="../index/index.html" class="fancy-button pop-onhover bg-gradient1"><input class="butonlogin" type="button" name="" value="登入"></span></a> -->
	            <!-- <a href="../index/index.html"><input class="butonlogin" type="button" name="" value="登入"></a> -->
	            <!-- <a href="../index/index.html" class="fancy-button pop-onhover bg-gradient1" "><span id="buttonsign">登入</span></a> -->

	        </div>
	    </form>
	    </section><br>
	    <span style="font-size: 23px; text-align: center; display: block; color: #E6E6E6;
	    ">歡迎歡迎!!熱烈歡迎</span>
	    <span style="font-size: 24px; text-align: center; display: block; color: #fff; font-weight: bold; margin-bottom: 34px;
	    ">登入頁面</span>
	    <span style="font-size: 17px; text-align: center; display: block; color: #fff;
	    ">www.12345678.com</span>
	    </div>
	    </section>
</form>
</body>
</html>