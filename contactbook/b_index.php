<?php
session_start();

?>
<html>
<head><title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="../CSS/style.css"> -->
</head>
<body>

<div class="flexbox">
    <div class="item">
        <?php
        $servername = '220.135.97.54:3307';
        $username = 'root';
        $password = 'jacky110120';
        $database = 'team3';

        $Registered_success = "false";

        $bd = mysqli_connect($servername, $username, $password, $database);
        
        $sql = "SELECT * FROM bt1 WHERE NAME != '' AND mess_vc = (select UA_VC from UserAccount where UA_Acu = '$_SESSION[name]') ORDER BY NO DESC LIMIT 15;";
        $rows = mysqli_query($bd, $sql);
        $num  = mysqli_num_rows($rows);
        echo "<table width=400 border=1>";
        while ($result = mysqli_fetch_row($rows)) {

            echo "<tr><td>$result[4]" . "-->" . "$result[2]" . "說:" . "$result[3]</td></tr>";
        }
        echo "</table>";
        ?>
    </div>
    <div class="item">
        <form action="contactbook.php" method=post>
            名字:
            <?php include '../config.php';?>
            <?php $UA_Name = $result["UA_Name"]; ?>
            <input name=bname style="margin:10px auto;width:100%;height:50px;" type=text value="<?php echo $UA_Name; ?>" readonly="readonly">
            留言:
            <textarea name=bnews class="form-control" type=text id="exampleFormControlTextarea1" rows="5" required></textarea>
            <!-- <input name=bnews style="margin:10px auto;width:100%;" type=text  /><br /> -->
            <label class="btn btn-info btn-block" style="margin-top:10px;background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
              <input style="display:none;" type="submit" name="ok">
              OK
              </label>
            <!-- <input name=ok type=submit value="OK"/><br /> -->
        </form>
    </div>
</div>


</body>
</html>