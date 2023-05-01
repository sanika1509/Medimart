<?php
session_start();
require '../../Connection.php';   
$id=$_GET['id'];
// echo $id;

    $sql_all_customers = "select * from customers where customer_id=$id";
    $result = mysqli_query($conn,$sql_all_customers);
    $total_rows_feched=mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer Form</title>
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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">CUSTOMER DETAILS</h3>
                  <form action="UpdateCustomerScript.php?id=<?php echo $id; ?>" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" name="fname" value="<?php echo $row['firstname'];?>"/>
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg" name="mname" value="<?php echo $row['middlename'];?>" />
                          <label class="form-label" for="lastName">Middle Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" name="lname" value="<?php echo $row['lastname'];?>"/>
                            <label class="form-label" for="lastName">Last Name</label>
                          </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
                        <?php 
                        if($row['gender']=='Female')
                        echo '
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="Female" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
                            
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        ';
                        if($row['gender']=='Male')
                        echo '
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="Female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
                            
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="Male" checked/>
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        ';
      
                        ?>
      
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" value="<?php echo $row['email'];?>" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phno" value="<?php echo $row['contact'];?>"/>
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                                <input type="text" id="age" class="form-control form-control-lg" name="age" value="<?php echo $row['age'];?>"/>
                                <label class="form-label" for="age">Age</label>
                              </div>
      
                      </div>


                      
                    </div>

                    
      
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
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