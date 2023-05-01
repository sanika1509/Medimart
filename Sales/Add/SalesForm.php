<?php
$type_count=$_POST['type_count'];
$cust_id=$_POST['cust_name'];
$cnt=1;

    include '../../Connection.php';
//         
// select * from medicines order by customer_id
// select * from medicines order by firstname
// select * from medicines order by age desc
// select * from medicines where gender="female"
// select * from medicines where gender="male"
    
    $sql_all_medicines = "select * from medicines;";
    $result = mysqli_query($conn,$sql_all_medicines);
    $total_rows_feched=mysqli_num_rows($result);

    
    $sql_all_customers = "select * from customers;";
    $customerresult = mysqli_query($conn,$sql_all_customers);
    $total_rows_feched=mysqli_num_rows($customerresult);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Input Sales</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Simple-Registration-Section.css">
</head>

<body>
    
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">SALES DETAILS</h3>
                
                  <form action="InsertSales.php?type_count=<?php echo $type_count; ?>&cust_id=<?php echo $cust_id; ?>" method="post">
                    <?php while($type_count>=$cnt) { ?>
                    
                    <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">MEDICINE <?php echo $cnt; ?> DETAILS :</h4>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
            
                            <select class="select form-control-lg" name=<?php echo "med".$cnt."name"; ?>>
                            <option>Choose Medicine</option>
                            <?php
                            while($row = mysqli_fetch_assoc($result)) 
                            { 
                            ?>
                            <option value="<?php echo $row['medicine_id'];?>"><?php echo $row['medicine_name'];?></option>
                            <?php }
                            $sql_all_medicines = "select * from medicines;";
                            $result = mysqli_query($conn,$sql_all_medicines);
                            ?>

                            </select>
                            <label class="form-label select-label">MEDICINE NAME </label>

                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="text" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."quantity"; ?>>
                            <label class="form-label" for="quantity">QUANTITY</label>
                        </div>
                        
                    </div>
                 
       
                                        
                        <?php $cnt++;} ?>
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                  
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>