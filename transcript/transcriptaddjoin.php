<?php
//The first question:empty_input
//The second question:password_error
//The third question:"The_Account_has_been_registered"
//The fourth question:The_Email_has_been_registered
$servername = '220.135.97.54:3307';
$username   = 'root';
$password   = 'jacky110120';
$database   = 'team3';

$Registered_success = "false";


// ------------教室--------------
// ------------教室--------------
// ------------教室--------------



if ($_POST["F_Subject"] == 0) {
    include '../fileuplo/upload-file/transcriptaddupload.php';
    
} else {
    echo "{";
        echo "\"SC_CN\":";
        if (isset($_POST["SC_CN"])) {
            $SC_CN = $_POST["SC_CN"];
            echo $SC_CN . ",";
        } else {
            echo "no_SC_CN" . ",";
        }
        
        echo "\"SC_SN\":";
        if (isset($_POST["SC_SN"])) {
            $SC_SN = $_POST["SC_SN"];
            echo $SC_SN . ",";
        } else {
            echo "no_SC_SN" . ",";
        }
        
        echo "\"F_Subject\":";
        if (isset($_POST["F_Subject"])) {
            $F_Subject = $_POST["F_Subject"];
            echo $F_Subject . ",";
        } else {
            echo "no_F_Subject" . ",";
        }
        
        echo "\"F_Fraction\":";
        if (isset($_POST["F_Fraction"])) {
            $F_Fraction = $_POST["F_Fraction"];
            echo $F_Fraction . ",";
        } else {
            echo "no_F_Fraction" . ",";
        }
        
        
        
        // --------------------------------------------------------
        // --------------------------------------------------------
        
        
        // --------------------------------------------------------
        // --------------------------------------------------------
        $bd = mysqli_connect($servername, $username, $password, $database);
        if (!$bd) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        
        // --------------------------------------------------------
        // --------------------------------------------------------
        $sql = "SELECT S_Id FROM Student WHERE S_Name = '$SC_SN'";
        $rows = mysqli_query($bd, $sql);
        $result = mysqli_fetch_assoc($rows);
        $S_Id = $result['S_Id'];
        // var_dump($result['S_Id']);
        // die;
        $sql1 = "SELECT Cr_Id FROM Classroom WHERE Cr_Name = '$SC_CN'";
        $rows1 = mysqli_query($bd, $sql1);
        $result1 = mysqli_fetch_assoc($rows1);
        $Cr_Id = $result1['Cr_Id'];
        
        // var_dump($Cr_Name);
        // die;
        $sql = "INSERT INTO Fraction (F_CrId, F_CrN, F_SId, F_SN, F_Fraction, F_Subject) VALUES ('$Cr_Id', '$SC_CN', '$S_Id', '$SC_SN', '$F_Fraction', '$F_Subject')";
        $rows = mysqli_query($bd, $sql);
        
        
        echo "}";
}






