<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Main Sales</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <?php
    require '../Connection.php';
    if(!$conn)
    {
    die('Error :'.mysqli_connect_error());
    }
    else
    {
    
    $sql = "select m.sale_date, m.bill_amount,m.sale_time, s.quantity, s.price, md.manufacturing_date, md.expiry_date, s.total, md.medicine_name,c.firstname,c.lastname from main_sales m inner join sales s inner join medicines md inner join customers c where m.main_sales_id=s.main_sales_id and s.medicine_id=md.medicine_id and m.customer_id=c.customer_id ;";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        echo "DB Error, could not list data\n";
        echo 'MySQL Error: ' . mysqli_error();
        exit;
    }
    $total_rows_feched=mysqli_num_rows($result);
    
    
    }
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <h3 class="text-dark mb-4">Sales</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a class="btn btn-primary" role="button"><i class="fa fa-plus"></i>&nbsp;Agregar colaborador</a></div>
        </div>
        <div class="card" id="TableSorterCard">
            <div class="card-header py-3">
                <div class="row table-topper align-items-center">
                    <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                        <p class="text-primary m-0 fw-bold">Colaboradores</p>
                    </div>
                    <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-primary btn-sm reset" type="button" style="margin: 2px;">Borrar Filtros</button><button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                   
                                <th class="text-center">sale_date</th>
                                    
                                    <th class="text-center">sale_time</th>  
                                    <th class="text-center">customer name</th>
                                    <th class="text-center">medicine_name</th>
                                    <th class="text-center">quantity</th>
                                    <th class="text-center">price</th>
                                    
                                    <th class="text-center">total</th>
                                    <th class="text-center">manufacturing_date</th>
                                    <th class="text-center">expiry_date</th>
                                    <th class="text-center">bill_amount</th>
                                  </tr>
                            </thead>
                                
                           
                            <tbody class="text-center">
                            <?php
                                while($row = mysqli_fetch_assoc($result)) 
                                { ?>
   
                                <tr>
                                    <td><?php echo $row["sale_date"]; ?></td>
                                    <td><?php echo $row["sale_time"]; ?></td>
                                    <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                                    <td><?php echo $row["medicine_name"]; ?></td>
                                    <td><?php echo $row["quantity"]; ?></td>
                                    <td><?php echo $row["price"]; ?></td>
                                    <td><?php echo $row["total"]; ?></td>
                                    <td><?php echo $row["manufacturing_date"]; ?></td>
                                    <td><?php echo $row["expiry_date"]; ?></td>
                                    <td><?php echo  $row["bill_amount"]; ?></td>
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