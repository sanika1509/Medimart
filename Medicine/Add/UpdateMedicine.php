<?php
session_start();
require '../../Connection.php';   
$id=$_GET['id'];
// echo $id;

    $sql_all_medicines = "select * from medicines where medicine_id=$id";
    $result = mysqli_query($conn,$sql_all_medicines);
    $total_rows_feched=mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Medicine Form</title>
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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">MEDICINES DETAILS</h3>
                  <form action="UpdateMedicineScript.php?id=<?php echo $id; ?>" method="POST">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" name="mname" value="<?php echo $row['medicine_name'];?>" />
                          <label class="form-label" for="firstName" >MEDICINE NAME</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg"name="mdesc" value="<?php echo $row['medicine_description'];?>" />
                          <label class="form-label" for="lastName" >MEDICINE DESCRIPTION</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" name="mprice" value="<?php echo $row['medicine_price'];?>" />
                            <label class="form-label" for="lastName" >MEDICINE PRICE</label>
                          </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">MANUFACTURING DATE </h6>
      
                        <label for="MANUFACTURING">Manufacturing:</label>
                         <input type="date" id="manu" name="manu" value="<?php echo $row['manufacturing_date'];?>">
                        
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <h6 class="mb-2 pb-1">EXPIRY DATE </h6>
      
                        <label for="exp">Expiring :</label>
                         <input type="date" id="exp" name="expiry" value="<?php echo $row['expiry_date'];?>">
      
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