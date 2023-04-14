<?php
include("connection.php");
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
        <form action="" method="post" name="myForm" onsubmit="return validateForm()">
        <div class="title">
            Registration form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" name="first" id="" class="input" >
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" name="last" id="" class="input">
            </div>

            <div class="input_field">
                <label for="">Password</label>
                <input type="password" name="password" id="pass" class="input">
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" name="conf" id="confirm_pass" class="input" onkeyup="validate_password()">
            </div>

            <div class="input_field">
                <label for="">Gender</label>
                <div class="selectbox">
                    <select name="gender" >
                        <option value="not selected">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>


                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">E-Mail</label>
                <input type="text" name="mail" id="" class="input" >
            </div>
            <div class="input_field">
                <label for="">Phone</label>
                <input type="text" name="phone" id="" class="input">
            </div>
           <div class="input_field" >
                <label for="" style="margin-right:100px;">Caste</label>
                <input type="radio" name="r1" value="General" id="" ><label style="margin-left:5px;">General</label>
                <input type="radio" name="r1" value="OBC" id="" > <label style="margin-left:5px;">OBC</label>
                <input type="radio" name="r1" value="SC" id="" > <label style="margin-left:5px;">SC</label>
                <input type="radio" name="r1" value="ST" id="" > <label style="margin-left:5px;">ST</label>

            </div>
            <div class="input_field" >
                <label for="" style="margin-right:100px;">Languages</label>
                <input type="checkbox" name="language[]" value="Hindi" id=""><label style="margin-left:5px;">Hindi</label>
                <input type="checkbox" name="language[]" value="English" id=""> <label style="margin-left:5px;">English</label>
                <input type="checkbox" name="language[]" value="Punjabi" id=""> <label style="margin-left:5px;">Punjabi</label>

            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address"class="textarea">

</textarea>
            </div>

            <div class="input_field">
                <label class="check" for="">
                    <input type="checkbox" name="" id="">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>

            </div>
            <span id="wrong_pass_alert"></span>

            <div class="input_field">
                <input type="submit" name="submit" id="create" class="btn" value="Register"  onclick="wrong_pass_alert()">
            </div>
        </div>
</form>
    </div>

</body>

</html>
<?php
if($_POST['submit']){
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $password=$_POST['password'];
    $conf=$_POST['conf'];
    $gender=$_POST['gender'];

    $email=$_POST['mail'];
    $phone=$_POST['phone'];
    $caste=$_POST['r1'];
$lang=$_POST['language'];
$lang1=implode(",",$lang);
 echo $lang1;
    $address=$_POST['address'];
//if($fname !="" && $lname !="" && $password !="" && $conf !="" && $gender !="" && $email !="" && $phone !="" && $caste !="" && lang1 !="" && $address !=""){

  $query ="INSERT INTO `form`(fname,lname,password,cpassword,gender,email,phone,caste,language,address) VALUES ('$fname','$lname','$password','$conf','$gender','$email','$phone','$caste','$lang1','$address')";
  $data=mysqli_query($con,$query);
  if($data){
    echo "data inserted";
  }
  else{
    echo "not inserted";
  }
}
//else{
   // echo "<script> alert('Please fill the form')</script>";
//}
//}
?>
