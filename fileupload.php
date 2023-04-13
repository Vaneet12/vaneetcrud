<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data"> 
    <input type="file" name="uploadfile" id=""><br><br>
    <input type="submit" name="" id="" value="Upload file">

</form>
</body>
</html>
<?php
$filename= $_FILES["uploadfile"]["name"];
$tempname= $_FILES["uploadfile"]["tmp_name"];

//print_r($_FILES["uploadfile"]);
$folder="images/" . $filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?>