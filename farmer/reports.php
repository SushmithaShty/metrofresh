<?php 

include '../config.php';

$admin=new Admin();
$fid=$_SESSION['f_id'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    
      <!-- partial -->
      <?php
        include 'sidebar.php'
      ?>
      <?php
        include 'header.php'
      ?>
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            


            <div class="row">
              <div class="col-lg-12  grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Report</h4>
                 






<div class="panel">
                                
                    <form action="reports.php" method="post">
                                    <br>
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-md-5">
                                        <label>Enter start Date</label>
                                        <input class="form-control" type="date" name="s_date"  max="<?php echo date('Y-m-d'); ?>" required></div>
                                        
                                    
                                        <div class="col-md-5">
                                        <label>Enter Final Date</label>
                                        <input class="form-control" type="date" name="f_date" max="<?php echo date('Y-m-d'); ?>" required></div>
                                    </div>
                                            

                                        <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                                    
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Generate Report" name="submit" style="margin-left:400px">
                                    </div>
                                    <br>

                            </form>
                        </div>
                  

<div><br><br><hr style="border:1px solid #001100"></div>

<?php if(isset($_POST['submit'])){

$s_date=$_POST['s_date'];
$f_date=$_POST['f_date'];






?>

                                <div class="panel-body">
                                    <table class="table table-hover" style="background-color:#EBF4FA">
                                        <thead>
                                            <tr>
                                                
                                               <th>User</th>
                                                <th>Email</th>
                                                <!-- <th>Address</th> -->
                                                <th>Contact</th>

                                                <th>Product</th>
                                                <th>Image</th>
                                                <!-- <th>Description</th> -->
                                                <th>Price</th>

                                                <th>Quantity</th>
                                                <th>Total Amount Paid</th>
                                                <th>Date</th>
  



                                                


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $stmt=$admin->ret("SELECT * FROM `order_details` INNER JOIN `items` ON items.i_id=order_details.i_id INNER JOIN `orders` ON order_details.o_id=orders.o_id INNER JOIN `customer` ON orders.c_id=customer.c_id WHERE `date` BETWEEN '$s_date' AND '$f_date' ");
                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                                            <tr>
                                                
                                                <td><?php echo $row['c_name']?></td>
                                                <td><?php echo $row['c_email']?></td>
                                                <td><?php echo $row['c_phone']?></td>

                                                <td><?php echo $row['i_name']?></td>
                                                <td><img src="../metro_fresh/image/<?php echo $row['i_img']?>" width="75px" height="75px"></td>
                                                <td><?php echo $row['i_price']?></td>

                                                <td><?php echo $row['quantity']?></td>
                                                    <td>₹<?php echo $row['i_price']*$row['quantity']?></td>
                                                
                                                
                                                <td><?php echo $row['date']?></td>


                                                
                                            </tr>

                                        <?php }?>
                                             
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                            </div>











                  </div>
                </div>
              </div>
              </div>
            </div>
            
              
           
          </div>
          <?php
        include 'footer.php'
      ?>
        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
      
      
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
