<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Options</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-74-hover_effect_74.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-74.css">
    <link rel="stylesheet" href="assets/css/Different-Styled---Cards-styles.css">
    <link rel="stylesheet" href="assets/css/Different-Styled---Cards.css">
    <link rel="stylesheet" href="assets/css/Ludens---5-Multiple-Cards-inside-Show.css">
    <link rel="stylesheet" href="../Style.css">
<style>  
a {
 text-decoration: none;
 color: black;
}
</style>

</head>

<body>

    <?php require '../Navbar.php';
    ?>

    <section style="padding-top: 40px;">
        <div class="container" style="text-align: center;">
            <h1>Medimart</h1>
        </div>
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
                <a href="../Sales/TodaysSales.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png" style="padding-left: 0px;" width="316" height="158">
                    <div class="card-body info">
                        <h4 class="card-title">View Today's Sale</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Sales/Sales.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png" width="321" height="160" style="margin-right: 68px;padding-right: 0px;padding-left: 0px;">
                    <div class="card-body info">
                        <h4 class="card-title">View Sale</h4>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </section>
    <section style="padding-top: 40px;">
        <div class="container" style="text-align: center;">
            <h1></h1>
        </div>
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
                <a href="../Sales/Add/SalesFormEntries.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Add Sale</h4>
                    </div>
</a>               </div>
            </div>
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Purchase/AllPurchases.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">View Purchases</h4>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </section>
    <section style="padding-top: 40px;">
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Purchase/Add/PurchaseFormEntries.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Add Purchases</h4>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
              <a href="../Medicine/Add/DeleteExpiredMedicines.php">  <div class="card clean-card text-center" ><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Delete Expired Medicine</h4>
                    </div>
                </div>
</a>
                
            </div>
         

                
            </div>
        </div>
    </section>
    <section style="padding-top: 40px;">
        <div class="container" style="text-align: center;">
            <h1></h1>
        </div>
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Customer/Customer.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Customers</h4>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Medicine/Medicine.php"><div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Medicines</h4>
                    </div>
                </div>
            </a>
            </div>
            <?php
            if($_SESSION['admin']==1)
            {
            //    echo  $_SESSION['admin'];
            echo ' <div class="col-sm-6 col-lg-4" style="margin-top: 35px;">
            <a href="../Employee/Employee.php"> <div class="card clean-card text-center" ><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/certificacion.png">
                    <div class="card-body info">
                        <h4 class="card-title">Employees</h4>
                    </div>
                </div>
                
            </div>';
            }
            ?>
    </section>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>