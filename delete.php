<?php
include ("connection.php");
$id= $_GET['id'];
$query="DELETE FROM form WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Record deleted')</script>";
    ?>


<meta http-equiv = "refresh" content = "0; url = https://psd2htmlx.com/R/demo/php/display.php" />

    <?php
}
else{
    echo "not deleted";
}
?>