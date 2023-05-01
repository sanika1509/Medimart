<?php
require '../../Connection.php';
$delete_query="delete from medicines where expiry_date < sysdate()";

$delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
header('location:../Medicine.php');



?>