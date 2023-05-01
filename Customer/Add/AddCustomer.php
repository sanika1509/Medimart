<?php

require '../../Connection.php';
$firstname=mysqli_real_escape_string($conn,$_POST['fname']);

$midname=mysqli_real_escape_string($conn,$_POST['mname']);

$lastname=mysqli_real_escape_string($conn,$_POST['lname']);

$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$mobile_no=$_POST['phno'];
$age=$_POST['age'];

// $password=md5($pass);


    $insert_query="insert into customers (firstname, middlename, lastname, email, contact, age, gender) values ('$firstname', '$midname', '$lastname', '$email',$mobile_no, $age,'$gender')";
   // echo "insert into customers (firstname, middlename, lastname, email, contact, age, gender) values ('$firstname', '$midname', '$lastname', '$email',$mobile_no, $age,'$gender')";
    $insert_query_result=mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Customer.php');

?>