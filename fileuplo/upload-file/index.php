<?php

// require '../bootstrap/index.php';

?>

<html>
    <head>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="file" name="fileToUpload2" id="fileToUpload2">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>
