<?php
// include '../../transcript/transcriptaddjoin.php';

use League\Csv\Reader;



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



if ($_POST["uploadchoice"] == 0) {

$targetDir = "../../file/csv/";
$targetFile = $targetDir . basename($_FILES["uploadBtn"]["name"]);
$targetFile1 = $targetDir . basename('child.csv');
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// Check if file already exists
// if (file_exists($targetFile)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
if ($_FILES["uploadBtn"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// // Allow certain file formats
if ($fileType != 'csv') {
    echo "Sorry, only CSV files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadBtn"]["tmp_name"], $targetFile1)) {
        echo "The file ". basename($_FILES["uploadBtn"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// -------------- read file ------------------
include '../read-file/childread.php';

$csv = Reader::createFromPath($targetFile1, 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

echo "{";
    echo "\"UA_PC\":";
    if (isset($_POST["UA_Acu"])) {
        $UA_Acu = $_POST["UA_Acu"];
        echo $UA_Acu . ",";
    } else {
        echo "no_UA_Acu" . ",";
    }
    echo "\"UA_PL\":";
    if (isset($_POST["UA_PL"])) {
        $UA_PL = $_POST["UA_PL"];
        echo $UA_PL . ",";
    } else {
        echo "no_UA_PL" . ",";
    }
    echo "\"Cr_Name\":";
    if (isset($_POST["Cr_Name"])) {
        $Cr_Name = $_POST["Cr_Name"];
        echo $Cr_Name . ",";
    } else {
        echo "no_Cr_Name" . ",";
    }
    echo "\"S_Name\":";
    if (isset($_POST["S_Name"])) {
        $S_Name = $_POST["S_Name"];
        echo $S_Name . ",";
    } else {
        echo "no_S_Name" . ",";
    }
    echo "\"UA_Name\":";
    if (isset($_POST["UA_Name"])) {
        $UA_Name = $_POST["UA_Name"];
        echo $UA_Name . ",";
    } else {
        echo "no_UA_Name" . ",";
    }
    echo "\"S_Phone\":";
    if (isset($_POST["S_Phone"])) {
        $S_Phone = $_POST["S_Phone"];
        echo $S_Phone . ",";
    } else {
        echo "no_S_Phone" . ",";
    }
    echo "\"UA_Psw\":";
    if (isset($_POST["UA_Psw"])) {
        $UA_Psw = $_POST["UA_Psw"];
        echo $UA_Psw . ",";
    } else {
        echo "no_UA_Psw" . ",";
    }
    
    
    // --------------------------------------------------------
    // --------------------------------------------------------
    
    
    // --------------------------------------------------------
    // --------------------------------------------------------
    $bd = mysqli_connect($servername, $username, $password, $database);
    if (!$bd) {
        die("Connection failed: " . mysqli_connect_error());
    }

            $sql2 = "Insert Into Student (S_Name,S_Phone) Values ( '$S_Name', '$S_Phone')";
            $rows2 =  mysqli_query($bd, $sql2);
            $sql3 = "select S_Id, S_Name from Student where S_Name = '$S_Name'";
            $rows3 = mysqli_query($bd, $sql3);
            $result3 = mysqli_fetch_assoc($rows3);
            $sql4 = "select Cr_Id, Cr_Name from Classroom where Cr_Name = '$Cr_Name'";
            $rows4 = mysqli_query($bd, $sql4);
            $result4 = mysqli_fetch_assoc($rows4);
            $sql5 = "Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values ($result4[Cr_Id], '$Cr_Name', $result3[S_Id], '$S_Name')";
            $rows5 =  mysqli_query($bd, $sql5);

    
} else {
    echo "{";
        echo "\"UA_PC\":";
        if (isset($_POST["UA_Acu"])) {
            $UA_Acu = $_POST["UA_Acu"];
            echo $UA_Acu . ",";
        } else {
            echo "no_UA_Acu" . ",";
        }
        echo "\"UA_PL\":";
        if (isset($_POST["UA_PL"])) {
            $UA_PL = $_POST["UA_PL"];
            echo $UA_PL . ",";
        } else {
            echo "no_UA_PL" . ",";
        }
        echo "\"Cr_Name\":";
        if (isset($_POST["Cr_Name"])) {
            $Cr_Name = $_POST["Cr_Name"];
            echo $Cr_Name . ",";
        } else {
            echo "no_Cr_Name" . ",";
        }
        echo "\"S_Name\":";
        if (isset($_POST["S_Name"])) {
            $S_Name = $_POST["S_Name"];
            echo $S_Name . ",";
        } else {
            echo "no_S_Name" . ",";
        }
        echo "\"UA_Name\":";
        if (isset($_POST["UA_Name"])) {
            $UA_Name = $_POST["UA_Name"];
            echo $UA_Name . ",";
        } else {
            echo "no_UA_Name" . ",";
        }
        echo "\"S_Phone\":";
        if (isset($_POST["S_Phone"])) {
            $S_Phone = $_POST["S_Phone"];
            echo $S_Phone . ",";
        } else {
            echo "no_S_Phone" . ",";
        }
        echo "\"UA_Psw\":";
        if (isset($_POST["UA_Psw"])) {
            $UA_Psw = $_POST["UA_Psw"];
            echo $UA_Psw . ",";
        } else {
            echo "no_UA_Psw" . ",";
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
        
        
        $sql = "select * from UserAccount where UA_Acu = '$S_Phone'";
        $rows = mysqli_query($bd, $sql);
        $result = mysqli_fetch_assoc($rows);
        $num  = mysqli_num_rows($rows);
        // var_dump($num);
        // die;
        if ($num != 0){
            $sql = "Insert Into Student (S_Name,S_Phone) Values ( '$S_Name', '$S_Phone')";
            $rows = mysqli_query($bd, $sql);
            $sql1 = "select S_Id, S_Name from Student where S_Name = '$S_Name'";
            $rows1 = mysqli_query($bd, $sql1);
            $result1 = mysqli_fetch_assoc($rows1);
            $sql2 = "select Cr_Id, Cr_Name from Classroom where Cr_Name = '$Cr_Name'";
            $rows2 = mysqli_query($bd, $sql2);
            $result2 = mysqli_fetch_assoc($rows2);
            $sql3 = "Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values ($result2[Cr_Id], '$Cr_Name', $result1[S_Id], '$S_Name')";
            $rows3 =  mysqli_query($bd, $sql3);
            // var_dump($result1['S_Name']);
            // die;
        }else {
        
            $sql = "select UA_CVC from UserAccount where UA_Acu = '$UA_Acu'";
            $rows = mysqli_query($bd, $sql);
            $result = mysqli_fetch_assoc($rows);
            $UA_CVC = $result['UA_CVC'];
            // $num  = mysqli_num_rows($rows);
            // var_dump($result['UA_CVC']);
            // die;
            $sql1 = "Insert Into UserAccount (UA_PL,UA_Acu,UA_Psw,UA_Name,UA_Phone,UA_VC,UA_CVC) Values ( '$UA_PL','$S_Phone','$UA_Psw','$UA_Name','$S_Phone','$UA_Psw','$UA_CVC')";
            $rows1 = mysqli_query($bd, $sql1);
            $sql2 = "Insert Into Student (S_Name,S_Phone) Values ( '$S_Name', '$S_Phone')";
            $rows2 =  mysqli_query($bd, $sql2);
            $sql3 = "select S_Id, S_Name from Student where S_Name = '$S_Name'";
            $rows3 = mysqli_query($bd, $sql3);
            $result3 = mysqli_fetch_assoc($rows3);
            $sql4 = "select Cr_Id, Cr_Name from Classroom where Cr_Name = '$Cr_Name'";
            $rows4 = mysqli_query($bd, $sql4);
            $result4 = mysqli_fetch_assoc($rows4);
            $sql5 = "Insert Into StudentClass (SC_CI, SC_CN, SC_SI, SC_SN) Values ($result4[Cr_Id], '$Cr_Name', $result3[S_Id], '$S_Name')";
            $rows5 =  mysqli_query($bd, $sql5);
        
        }
        
        echo "}";
}










// ----------------- upload file ---------------------
