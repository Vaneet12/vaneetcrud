<?php
include("connection.php");
session_start();
$userprofile= $_SESSION['user_name'];

$id= $_GET['id'];
if($userprofile==true){

}
else{
    header('location:login.php');

}
$query="SELECT * FROM `form` where id='$id'";
$data=mysqli_query($con,$query);
$total= mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
$language=$result['language'];
$language1=explode(",",$language);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD operation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="validate.js"></script>
</head>

<body>
    <div class="container">
        <div class="title">
User profile       </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name: <?php echo $result['fname']; ?></label>               

                 </div>

            <div class="input_field">
                <label for="">Last Name:<?php echo $result['lname']; ?></label>
            </div>

            

            

            <div class="input_field">
                <label for="">Gender: <?php
                        if($result['gender']=='male'){
                            echo "Male";
                        }
                        ?>
                        <?php
                        if($result['gender']=='female'){
                            echo "Female";
                        }
                        ?></label>
                
            </div>
            <div class="input_field">
                <label for="">E-Mail: <?php echo $result['email']; ?></label>
            </div>
            <div class="input_field">
                <label for="">Phone:<?php echo $result['phone']; ?></label>
            </div>
            <div class="input_field" >
                <label for="" style="margin-right:100px;">Caste:<?php
                if($result['caste']=="General"){
                    echo "General";
                }

                ?>
                <?php
                if($result['caste']=="OBC"){
                    echo "OBC";
                }

                ?>
                <?php
                if($result['caste']=="SC"){
                    echo "SC";
                }

                ?>
                
                
                <?php
                if($result['caste']=="ST"){
                    echo "ST";
                }

                ?></label>
                
                
                

                
                
                
                
                
                

            </div>

            <div class="input_field" >
                <label for="" style="margin-right:100px;">Languages:  <?php

if(in_array('Hindi',$language1)){
    echo "Hindi ";
}
?>
<?php

if(in_array('English',$language1)){
    echo "English ";
}
?>
<?php

if(in_array('Punjabi',$language1)){
    echo "Punjabi ";
}
?></label>
         
                

            </div>

            <div class="input_field">
                <label for="">Address:               <?php echo $result['address']; ?>
</label>
            </div>


            <div class="input_field">
            <a href="logout.php" ><input type="submit" value="Logout" style="background:blue; color:white;height:35px;width:100px;margin-top:20px;font-size:18px;border-radius:5px;cursor:pointer;">
            </div>
        </div>
</form>
    </div>

</body>

</html>