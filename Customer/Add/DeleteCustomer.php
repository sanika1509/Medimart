<?php

require '../../Connection.php';

$id=$_GET['id'];


    $delete_query='delete from customers  where customer_id='.$id;
    echo 'delete from employees  where customer_id='.$id;
    $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Customer.php');

?>