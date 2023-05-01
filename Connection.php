<?php
$conn = mysqli_connect("localhost","root","","medimart")
or die (mysqli_error($conn));
if($conn)
echo " ";
else
echo"error";
?>