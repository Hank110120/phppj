<?php
session_start();
// $_SESSION["SC_CN"] = $_POST["SC_CN"];
// var_dump($_SESSION["SC_CN"]);
// die;
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

        if (isset($_SESSION["name"])) {
            $UA_Acu = $_SESSION["name"];
            // echo $SC_SN . ",";
        } else {
            echo "no_UA_Acu" . ",";
        }
        if (isset($_POST["SC_SN"])) {
            $SC_SN = $_POST["SC_SN"];
            // echo $SC_SN . ",";
        } else {
            echo "no_SC_SN" . ",";
        }
        
        // echo "\"SC_CN\":";
        if (isset($_POST["SC_CN"])) {
            $SC_CN = $_POST["SC_CN"];
            // echo $SC_CN . ",";
        } else {
            echo "no_SC_CN" . ",";
        }
       

        $bd = mysqli_connect($servername, $username, $password, $database);
        // $sql = "SELECT SC_CI FROM StudentClass WHERE SC_CN = '$_SESSION[SC_CN]'";
        // $rows = mysqli_query($bd, $sql);
        // $result = mysqli_fetch_row($rows);
        // $SC_CI = $result['SC_CI'];

        // $sql1 = "select * from bt1 where mess_SN = '$SC_SN' and mess_CN = '$SC_CN' ORDER BY NO DESC LIMIT 5;";
        $sql2 = "select * from Classroom where Cr_Name = '$SC_CN'";
        $rows2 = mysqli_query($bd, $sql2);
        $result2 = mysqli_fetch_row($rows2);
        $Cr_VC = $result2[2];
        $sql3 = "select * from UserAccount where UA_VC = '$Cr_VC'";
        $rows3 = mysqli_query($bd, $sql3);
        $result3 = mysqli_fetch_row($rows3);
        $teacherName = $result3[4];
        $sql = "select * from UserAccount where UA_Acu = '$UA_Acu'";
        $rows = mysqli_query($bd, $sql);
        $result = mysqli_fetch_row($rows);
        $UA_Name = $result[4];

        $sql1 = "SELECT * FROM bt1 where mess_CN = '$SC_CN' AND mess_SN = '$UA_Name' ORDER BY NO DESC LIMIT 5";
        $rows1 = mysqli_query($bd, $sql1);
        // $num  = mysqli_num_rows($rows1);
        // var_dump($sql1);
        // die;
        echo "<table width=400 border=1>";
        while ($result1 = mysqli_fetch_row($rows1)) {
            if($result1[3] == '1'){
                echo "<tr><td>$teacherName" . "-->" . "$result1[2]" . "說:" . "$result1[4]</td></tr>";
            }else{
                echo "<tr><td>$result1[2]" . "-->" . "$teacherName" . "說:" . "$result1[4]</td></tr>";
            }
            
        }
        echo "</table>";

        ?>
    </div>
    <div class="item">
        <form action="studentcontactbook.php" method=post>
            談話對象:
            <?php include '../config.php';?>
            <?php $UA_Name = $result["UA_Name"]; ?>
            <input name=teacherName style="margin:10px auto;width:100%;height:50px;" type=text value="<?php echo $teacherName; ?>" readonly="readonly">
            <input name=SC_SN style="margin:10px auto;width:100%;height:50px;" type=hidden value="<?php echo $SC_SN; ?>" readonly="readonly">
            <input name=SC_CN style="margin:10px auto;width:100%;height:50px;" type=hidden value="<?php echo $SC_CN; ?>" readonly="readonly">

            <input name=UA_Name style="margin:10px auto;width:100%;height:50px;" type=hidden value="<?php echo $UA_Name; ?>" readonly="readonly">
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