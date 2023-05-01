<?php

require '../../Connection.php';

$name=mysqli_real_escape_string($conn,$_POST['mname']);

$descript=mysqli_real_escape_string($conn,$_POST['mdesc']);
$price=$_POST['mprice'];
$manufacture=mysqli_real_escape_string($conn,$_POST['manu']);

$expiry=mysqli_real_escape_string($conn,$_POST['expiry']);

// $password=md5($pass);

    $insert_query="insert into medicines (medicine_name, medicine_description, medicine_price, manufacturing_date,expiry_date) values ('$name', '$descript', $price, '$manufacture','$expiry')";
    echo "insert into medicines (medicine_name, medicine_description, medicine_price, manufacturing_date,expiry_date) values ('$name', '$descript', $price, '$manufacture','$expiry'";
    $insert_query_result=mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Medicine.php');

?>