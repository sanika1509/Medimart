<?php
session_start();
$bill_amount=0;
$cid=$_GET['cust_id'];
$bill_amount=0;
$total=array();
$quantity=array();
$medicine_ids=array();
$price=array();
$manufacturing=array();
$expiring=array();
require '../../Connection.php';
print_r($_POST);
$count=$_GET['type_count'];

$cnt=1;
while($count>=$cnt)
{
    $a="med".$cnt."quantity";
    $b="med".$cnt."name";
    array_push($quantity,$_POST["$a"]);
    array_push($medicine_ids,$_POST["$b"]);
    $cnt++;
}

echo $cid;
echo $count;
echo "<pre>";
print_r($quantity);
print_r($medicine_ids);

//Fetching medicine price and manufacturing date, expiry date
$cnt=1;
while($count>=$cnt)
{
foreach($medicine_ids as $m1) {
    $select_query="select * from medicines where medicine_id=$m1";
    $select_query=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($select_query);
    array_push($price,$row["medicine_price"]);
    array_push($manufacturing,$row["manufacturing_date"]);
    
    array_push($expiring,$row["expiry_date"]);

  }
  $cnt++;

}
// foreach ($colors as $key=>$value) {
    
  
// $insert_query="insert into main_sales (customer_id, bill_amount, sale_date, sale_time, type_count) values ($cid, $bill_amount, sysdate(), current_time(), $count)";
// echo "insert into main_sales (customer_id, bill_amount, sale_date, sale_time, type_count) values ($cid, $bill_amount, sysdate(), current_time(), $count)";
// $insert_query_result=mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
// }  

$length = count($medicine_ids);
for ($i = 0; $i < $length; $i++) {
  echo $medicine_ids[$i]."\n";
  echo $quantity[$i]."\n";
  echo $price[$i]."\n";
  echo $manufacturing[$i]."\n";
  echo $expiring[$i]."\n";
  $bill_amount=$bill_amount+($quantity[$i]*$price[$i]);
  array_push($total,$quantity[$i]*$price[$i]);
  echo $bill_amount;
  echo "---------------------------";
}




$insert_query="insert into main_sales (customer_id, bill_amount, sale_date, sale_time, type_count) values ($cid, $bill_amount, sysdate(), current_time(), $count)";
echo "insert into main_sales (customer_id, bill_amount, sale_date, sale_time, type_count) values ($cid, $bill_amount, sysdate(), current_time(), $count)";
$insert_query_result=mysqli_query($conn,$insert_query) or die(mysqli_error($conn));


$get_last_Inserted_main_Sale_id="SELECT main_sales_id FROM main_sales ORDER BY main_sales_id DESC LIMIT 1;";
    $main_sales_id_result=mysqli_query($conn,$get_last_Inserted_main_Sale_id) or die(mysqli_error($conn));
    $main_row=mysqli_fetch_assoc($main_sales_id_result);
    $main_sales_id=$main_row['main_sales_id'];
    echo "------------------";
    echo $main_sales_id; 

$length = count($medicine_ids);
for ($i = 0; $i < $length; $i++) {
    echo "insert into sales (main_sales_id, quantity, price, medicine_id,  total, employee_id)  values ($main_sales_id, $quantity[$i], $price[$i],$medicine_ids[$i], $total[$i],". $_SESSION["userid"].")\n";
   
    $insert_query_for_sale="insert into sales (main_sales_id, quantity, price, medicine_id, total, employee_id)  values ($main_sales_id, $quantity[$i], $price[$i], $medicine_ids[$i], $total[$i], ".$_SESSION['userid'].")";
    //echo "insert into sales (main_sales_id, quantity, price, manufacturing_date, medicine_id, expiry_date, total, employee_id)  values (main_sales_id, $quantity[$i], $price[$i], $manufacturing_date[$i], $expiry_date[$i], $total[$i], $_SESSION['userid'])";
    $insert_query_result=mysqli_query($conn,$insert_query_for_sale) or die(mysqli_error($conn));
    
}

header('location:../TodaysSales.php');

// $firstname=mysqli_real_escape_string($conn,$_POST['fname']);

// $midname=mysqli_real_escape_string($conn,$_POST['mname']);

// $lastname=mysqli_real_escape_string($conn,$_POST['lname']);

// $gender=mysqli_real_escape_string($conn,$_POST['gender']);
// $email=mysqli_real_escape_string($conn,$_POST['email']);
// $mobile_no=$_POST['phno'];
// $isadmin=mysqli_real_escape_string($conn,$_POST['isadmin']);
// $age=$_POST['age'];

// $uname=mysqli_real_escape_string($conn,$_POST['uname']);
// $pass=mysqli_real_escape_string($conn,$_POST['pass']);

// // $password=md5($pass);

// $select_query="select employee_id from employees where username='$uname';";
// $select_query_result=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
// if(mysqli_num_rows($select_query_result)>0)
// {
//     echo 'username is already exists';
//     header('location:EmployeeForm.php?e_error=Username already exists...!');
// }
// else
// {
//     $insert_query="insert into employees (firstname, middlename, lastname, email, contact, age, gender, password, username, isadmin) values ('$firstname', '$midname', '$lastname', '$email',$mobile_no, $age,'$gender','$pass', '$uname',$isadmin)";
//     //echo "insert into employees (firstname, middlename, lastname, email, contact, age, gender, password, username, isadmin) values ('$firstname', '$midname', '$lastname', '$email',$mobile_no, $age,'$gender','$pass', '$uname',$isadmin)";
//     $insert_query_result=mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
    

// //$u_id=mysqli_insert_id($conn);
// header('location:../Employee.php');
// }
?>