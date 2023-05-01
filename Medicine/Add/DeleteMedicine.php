<?php

require '../../Connection.php';

$id=$_GET['id'];


    $delete_query='delete from medicines where medicine_id='.$id;
    //echo 'delete from medicines  where medicine_id='.$id;
    $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
    

//$u_id=mysqli_insert_id($conn);
header('location:../Medicine.php');

?>