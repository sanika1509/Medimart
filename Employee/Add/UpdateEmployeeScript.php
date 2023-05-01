<?php

require '../../Connection.php';
// $email=$_POST['email'];
// $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
// if(!preg_match($regex_email,$email))
// {
//     header('location:Sign Up.php?email_error=Enter correct email...!');
// }
// $pass=$_POST['password'];
// if(strlen($pass)<6)
// {
//     header('location: signup.php?password_error=enter correct password');
// }
// $mobile_no=$_POST['mobile_no'];
// $regex_mobile_no="/^[0-9]{10}+$/";
// if(!preg_match($regex_mobile_no,$mobile_no))
// {
//     header('location: Sign Up.php?mobile_no_error=Mobile no must be 10 digit...!');
   
// }
$id=$_GET['id'];
$firstname=mysqli_real_escape_string($conn,$_POST['fname']);

$midname=mysqli_real_escape_string($conn,$_POST['mname']);

$lastname=mysqli_real_escape_string($conn,$_POST['lname']);

$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$mobile_no=$_POST['phno'];
$isadmin=mysqli_real_escape_string($conn,$_POST['isadmin']);
$age=$_POST['age'];

$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);

// $password=md5($pass);


    $update_query='update employees set firstname='."'$firstname'".', middlename='."'$midname'".', lastname='."'$lastname'".',email='."'$email'".', contact='.$mobile_no.', age='.$age.', gender='."'$gender'".', password='."'$pass'".', username='."'$uname'".', isadmin='.$isadmin .' where employee_id='.$id;
    
    $update_query_result=mysqli_query($conn,$update_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Employee.php');

?>