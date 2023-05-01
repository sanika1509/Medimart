<?php
  include '../../Connection.php';
  //         
  // select * from medicines order by customer_id
  // select * from medicines order by firstname
  // select * from medicines order by age desc
  // select * from medicines where gender="female"
  // select * from medicines where gender="male"
      
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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">SALES ENTRIES ?</h3>
                  <form action="SalesForm.php" method="post">
                  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="type_count" name="type_count" class="form-control form-control-lg" />
                        <label class="form-label" for="type_count">Type Count</label>
                        <div class="row">
                        

                        <div class="col-md-6 mb-4">
                        <label class="form-label select-label">CUSTOMER NAME </label>      
                          <select class="select form-control-lg" name="cust_name" ?>>
                                                  
                          <option>Choose Customer</option>
                          <?php
                              while($customerrow = mysqli_fetch_assoc($customerresult)) 
                                  { 
                          ?>
                              <option value="<?php echo $customerrow ['customer_id'];?>"><?php echo $customerrow ['firstname']." ".$customerrow ['lastname'];?></option>
                              <?php }
                              ?>
                            </select>
  
        
                        </div>
                   
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
                    </div>
                    </div>
                  </div>  
</form>

               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>