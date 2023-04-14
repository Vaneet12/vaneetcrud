
<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <script src="validate1.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="#" method="post" name="myForm" onsubmit="return validateForm()" autocomplete="off">
        <div class="form">
            <input type="text" name="username" id="" class="textfiled" placeholder="Username" >
            <input type="password" name="password" id="" class="textfiled" placeholder="Password" >
<div class="forgetpass"><a href="#" class="link" onclick="message()">Forget Password ?</a></div>
<input type="submit" name="submit" value="Login" class="btn">
<div class="signup">New member? <a href="http://localhost/form.php" class="link">Signup</a></div>
        </div>
    </div>
</form>
    <script>
function message(){
    alert("click ok");
}

</script>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `form` WHERE email='$username' && password='$password'";
    $data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
echo $total;
if($total){
     $_SESSION['user_name']=$username;
header('location:display.php');
}
else{
    echo "Login failed";                           
}
}
?>