<!DOCTYPE html>
<html lang="en">
<?php
    include '../Connection.php';
//         
// select * from medicines order by customer_id
// select * from medicines order by firstname
// select * from medicines order by age desc
// select * from medicines where gender="female"
// select * from medicines where gender="male"
    
    $sql_all_medicines = "select * from medicines;";
    $result = mysqli_query($conn,$sql_all_medicines);
    $total_rows_feched=mysqli_num_rows($result);

    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Medicine Table</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <h3 class="text-dark mb-4">Medicines</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a href= "../Options/Options.php" class="btn btn-primary" role="button" style=" margin-right:20px;"><i class="fa fa-arrow-left" ></i>&nbsp;Go To Medimart</a><a href="Add/MedicineForm.php" class="btn btn-primary" role="button"><i class="fa fa-plus"></i>&nbsp;Add Medicine</a></div>
    </div>
        <div class="card" id="TableSorterCard">
            <div class="card-header py-3">
                <div class="row table-topper align-items-center">
                    <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                        <p class="text-primary m-0 fw-bold">Colaboradores</p>
                    </div>
                    <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;">
                    <form action="" method="post">
                    <button name="name_filter" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;">Sort By Name</button>
                    <button name="price_asc_filter" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;">Price Asc</button>
                    <button name="price_desc_filter" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;">Price Desc</button>
                    
                    <button name="age_desc_filter" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;">Manufacturing Date</button>
                    <button name="female_filter" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;">Expiry Date</button>
                    
                    <button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button></div> 
                    </form>
                </div>
                <?php 
                if(isset($_POST["name_filter"]))
                {
                    $sql_all_customers = "select * from medicines order by medicine_name";
                    $result = mysqli_query($conn,$sql_all_customers);
                    $total_rows_feched=mysqli_num_rows($result);
                }
                else if(isset($_POST["price_asc_filter"]))
                {
                    $sql_all_customers = "select * from medicines order by medicine_price";
                    $result = mysqli_query($conn,$sql_all_customers);
                    $total_rows_feched=mysqli_num_rows($result);
                }
                else if(isset($_POST["age_desc_filter"]))
                {
                    $sql_all_customers = "select * from medicines order by medicine_price desc";
                    $result = mysqli_query($conn,$sql_all_customers);
                    $total_rows_feched=mysqli_num_rows($result);
                }
                else if(isset($_POST["female_filter"]))
                {
                    $sql_all_customers = "select * from medicines order by manufacturing_date asc";
                    $result = mysqli_query($conn,$sql_all_customers);
                    $total_rows_feched=mysqli_num_rows($result);
                }
                else if(isset($_POST["male_filter"]))
                {
                    $sql_all_customers = "select * from medicines order by expiry_date asc";
                    $result = mysqli_query($conn,$sql_all_customers);
                    $total_rows_feched=mysqli_num_rows($result);
                }
               
                ?>    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">Name</th>
                    
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Manufacturig Date</th>
                                    <th class="text-center">Expiry Date</th>
                                    
                                    
                                    <th class="text-center filter-false sorter-false">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <?php
                                while($row = mysqli_fetch_assoc($result)) 
                                { 
                                    ?>
                                
                                <tr>
                                    <td><?php echo $row['medicine_name']; ?></td>
                                    <td><?php echo $row['medicine_price']; ?></td>
                                    <td><?php echo $row['manufacturing_date']; ?></td>
                                    <td><?php echo $row['expiry_date']; ?></td>
                                  
                                    <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#"><i class="far fa-eye"></i></a>
                                    <a class="btn btnMaterial btn-flat success semicircle" role="button" href="Add/UpdateMedicine.php?id=<?php echo $row['medicine_id'];?>"><i class="fas fa-pen"></i></a>
                                    <a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;"  href="Add/DeleteMedicine.php?id=<?php echo $row['medicine_id'];?>">
                                    <i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                                </tr>
                                <?php    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
</body>

</html>