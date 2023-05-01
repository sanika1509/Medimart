<?php
session_start();
$bill_amount=0;
$vendor=$_GET['vendor'];
$total=array();
$quantity=array();

$medicine_ids=array();
$medicine_names=array();
$prices=array();
$manufacturing=array();
$expiring=array();
require '../../Connection.php';
print_r($_POST);
$count=$_GET['type_count'];

$cnt=1;
while($count>=$cnt)
{
    $a="med".$cnt."quantity";
    $b="med".$cnt."price";
    
    $c="med".$cnt."manu";
    $d="med".$cnt."expiry";
    $e="med".$cnt."name";
    
    array_push($medicine_names,$_POST["$e"]); 
   
    array_push($quantity,$_POST["$a"]);
    array_push($prices,$_POST["$b"]);
    
    array_push($manufacturing,$_POST["$c"]);
    
    array_push($expiring,$_POST["$d"]);
    $cnt++;
}

echo $vendor;
echo $count;
echo "<pre>";
print_r($quantity);
print_r($medicine_names);
print_r($prices);
print_r($manufacturing);
print_r($expiring);


$length = count($medicine_names);
for ($i = 0; $i < $length; $i++) {
    
$insert_query_for_medicine="insert into medicines (medicine_name, medicine_price, manufacturing_date,expiry_date) values ('$medicine_names[$i]', $prices[$i], '$manufacturing[$i]','$expiring[$i]')";
echo "insert into medicines (medicine_name, medicine_price, manufacturing_date,expiry_date) values ('$medicine_names[$i]', $prices[$i], '$manufacturing[$i]','$expiring[$i]')";
$insert_query_result=mysqli_query($conn,$insert_query_for_medicine) or die(mysqli_error($conn));
    
}



foreach($medicine_names as $m1) {
  echo "$m1";
    $select_query="select * from medicines where medicine_name='$m1'";
    $select_query=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
    $row=mysqli_fetch_assoc($select_query);
    array_push($medicine_ids,$row["medicine_id"]);

  }



$length = count($medicine_ids);
for ($i = 0; $i < $length; $i++) {
  echo $medicine_ids[$i]."\n";
  echo $quantity[$i]."\n";
  echo $prices[$i]."\n";
  echo $manufacturing[$i]."\n";
  echo $expiring[$i]."\n";
  $bill_amount=$bill_amount+($quantity[$i]*$prices[$i]);
  array_push($total,$quantity[$i]*$prices[$i]);
  echo $bill_amount;
  echo "---------------------------";
}




$insert_query_for_main_purchase="insert into main_purchase (vendor_name, purchase_date,  bill_amount, purchase_time, type_count) values ('$vendor', sysdate(), $bill_amount,  current_time(), $count)";
echo "insert into main_purchase (vendor_name, purchase_date,  bill_amount, purchase_time, type_count) values ('$vendor', sysdate(), $bill_amount,  current_time(), $count)";

$insert_query_result=mysqli_query($conn,$insert_query_for_main_purchase) or die(mysqli_error($conn));


$get_last_Inserted_main_purchase_id="SELECT main_purchase_id FROM main_purchase ORDER BY main_purchase_id DESC LIMIT 1;";
    $main_purchase_id_result=mysqli_query($conn,$get_last_Inserted_main_purchase_id) or die(mysqli_error($conn));
    $main_row=mysqli_fetch_assoc($main_purchase_id_result);
    $main_purchase_id=$main_row['main_purchase_id'];
    echo "------------------";
    echo $main_purchase_id; 

$length = count($medicine_ids);
for ($i = 0; $i < $length; $i++) {
    echo "insert into purchase (main_purchase_id, quantity, price, medicine_id,  manufacturing_date, expiry_date, total)  values ($main_purchase_id, $quantity[$i], $prices[$i],$medicine_ids[$i],  $manufacturing[$i], $expiring[$i], $total[$i])\n";
   
    $insert_query_for_purchase="insert into purchase (main_purchase_id, quantity, price, medicine_id,  manufacturing_date, expiry_date, total)  values ($main_purchase_id, $quantity[$i], $prices[$i],$medicine_ids[$i],  '$manufacturing[$i]', '$expiring[$i]', $total[$i])";
    //echo "insert into sales (main_sales_id, quantity, price, manufacturing_date, medicine_id, expiry_date, total, employee_id)  values (main_sales_id, $quantity[$i], $price[$i],, $total[$i], $_SESSION['userid'])";
    $insert_query_result=mysqli_query($conn,$insert_query_for_purchase) or die(mysqli_error($conn));
    
}

 header('location:../AllPurchases.php');

?>