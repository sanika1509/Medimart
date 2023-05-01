<?php

require '../Connection.php';
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


    $delete_query='delete from employees  where employee_id='.$id;
    echo 'delete from employees  where employee_id='.$id;
    $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:Employee.php');

?>