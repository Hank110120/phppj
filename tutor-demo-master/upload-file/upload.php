<?php
include '../bootstrap/index.php';

use League\Csv\Reader;

// ----------------- upload file ---------------------

$targetDir = "../files/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// -------------- read file ------------------
$csv = Reader::createFromPath($targetFile, 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object
