<?php

require '../../Connection.php';

$id=$_GET['id'];
$firstname=mysqli_real_escape_string($conn,$_POST['fname']);

$midname=mysqli_real_escape_string($conn,$_POST['mname']);

$lastname=mysqli_real_escape_string($conn,$_POST['lname']);

$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$mobile_no=$_POST['phno'];
$age=$_POST['age'];

// $password=md5($pass);


    $update_query='update customers set firstname='."'$firstname'".', middlename='."'$midname'".', lastname='."'$lastname'".',email='."'$email'".', contact='.$mobile_no.', age='.$age.', gender='."'$gender'".' where customer_id='.$id;
    echo 'update customers set firstname='."'$firstname'".', middlename='."'$midname'".', lastname='."'$lastname'".',email='."'$email'".', contact='.$mobile_no.', age='.$age.', gender='."'$gender'".' where customer_id='.$id;
    $update_query_result=mysqli_query($conn,$update_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Customer.php');

?>