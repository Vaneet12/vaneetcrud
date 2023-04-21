<?php
$name = $_POST['empname'];
$email = $_POST['emailid'];
$phn = $_POST['phn'];
$address = $_POST['address'];
$uname = $_POST['uname'];
$password = $_POST['password'];

// Establishing Connection with Server..
$conn = new mysqli('localhost', 'root', '', 'company');

//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Selecting Database
$db = mysql_select_db("company", $connection); // Selecting Database

if (isset($_POST['empname'])) {

//Insert Query
$insert= "insert into employee(emp_id, emp_name , email, phone, address, username, password) 
values ('','$name', '$email', '$phn', '$address','$uname', '$password')"; 

if($conn->query($insert)){
 echo 'Data inserted successfully';
}
else{
 echo 'Error '.$conn->error;  
}
}
mysql_close($connection); // Connection Closed
?>