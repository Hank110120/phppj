<html>
<head><title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="b_insert.php" method=post>
    名字:
    <input name=bname type=text /><br />
    留言:
    <input name=bnews type=text  />
    <input name=ok type=submit value="OK"/><br />
</form>
<br />
<?php
$servername = '220.135.97.54:3307';
$username = 'root';
$password = 'jacky110120';
$database = 'team3';

$Registered_success = "false";

$bd = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from bt1";
$aa = mysqli_query($bd, $sql);

echo "<table width=400 border=1>";

while ($bb = mysqli_fetch_row($aa)) {
	echo "<tr><td>$bb[0]" . "F" . "$bb[1]" . "說:" . "$bb[2]</td></tr>";
}
echo "</table>";
?>

</body>
</html>