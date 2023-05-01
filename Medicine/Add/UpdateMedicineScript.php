<?php

require '../../Connection.php';

$id=$_GET['id'];

$name=mysqli_real_escape_string($conn,$_POST['mname']);

$descript=mysqli_real_escape_string($conn,$_POST['mdesc']);
$price=$_POST['mprice'];
$manufacture=mysqli_real_escape_string($conn,$_POST['manu']);

$expiry=mysqli_real_escape_string($conn,$_POST['expiry']);

// $password=md5($pass);

    $update_query='update medicines set medicine_name='."'$name'".', medicine_description='."'$descript'".', medicine_price='.$price.',manufacturing_date='."'$manufacture'".', expiry_date='."'$expiry'".' where medicine_id='.$id;
    
    //echo 'update medicines set medicine_name='."'$name'".', medicine_desciption='."'$descript'".', medicine_price='.$price.',menufacturing_date='."'$manufacture'".', expity_date='."'$expiry'".' where medicine_id='.$id;
    $insert_query_result=mysqli_query($conn,$update_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Medicine.php');


?>