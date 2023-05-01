<?php
$type_count=$_POST['type_count'];
$vendor_name=$_POST['vendor_name'];
$cnt=1;

    include '../../Connection.php';
//         
// select * from medicines order by customer_id
// select * from medicines order by firstname
// select * from medicines order by age desc
// select * from medicines where gender="female"
// select * from medicines where gender="male"
  
  

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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">PURCHASE DETAILS</h3>
                
                  <form action="InsertPurchases.php?type_count=<?php echo $type_count; ?>&vendor=<?php echo $vendor_name; ?>" method="post">
                    <?php while($type_count>=$cnt) { ?>
                    
                    <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">MEDICINE <?php echo $cnt; ?> DETAILS :</h4>
                    <div class="row">
                     
                   
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="text" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."name"; ?> value="">
                            <label class="form-label" for="quantity">MEDICINE NAME</label>
                        </div>
                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="text" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."quantity"; ?>>
                            <label class="form-label" for="quantity">QUANTITY</label>
                        </div>
                        
                    </div>
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="number" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."price"; ?>>
                            <label class="form-label" for="quantity">PRICE</label>
                        </div>
                        
                    </div>
                            </div>
                            <div class="row">
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="date" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."manu"; ?>>
                            <label class="form-label" for="quantity">MENUFACTURING DATE</label>
                        </div>
                        
                    </div>
                    <div class="col-md-6 mb-4">
                        
                        <div class="form-outline">
                            <input type="date" id="quantity" class="form-control form-control-lg" name=<?php echo "med".$cnt."expiry"; ?>>
                            <label class="form-label" for="quantity">EXPIRY DATE</label>
                        </div>
                        
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