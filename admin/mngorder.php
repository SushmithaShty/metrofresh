<?php 

include '../config.php';

$admin=new Admin();
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
                    <h4 class="card-title">Manage Order</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                    <tr>
                       <th>Order_Id</th>
                                            <th>Farmer</th>
                                            <th>Address</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>

                                            
                                            <th>Date</th>
                                            <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                                        
                                        $st=$admin->ret("SELECT * FROM `order_details` INNER JOIN `products` ON products.p_id=order_details.p_id INNER JOIN `orders` ON order_details.o_id=orders.o_id INNER JOIN `farmer` ON orders.f_id=farmer.f_id ");
                                        while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['o_id']?><br>

                                                    <td><?php echo $row['f_name']?></td>
                                                    <td><?php echo $row['f_address']?></td>
                                                    <td><?php echo $row['p_name']?></td>
                                                    <td>₹<?php echo $row['p_price']?></td>
                                                    <td><?php echo $row['quantity']?></td>
                                                    <td>₹<?php echo $row['p_price']*$row['quantity']?></td>
                                                
                                                
                                                <td><?php echo $row['date']?></td>

                                                <?php if($row['status']=='order received'){?>

                                                    <td><a href="controller/orderdelivered.php?id=<?php echo $row['od_id'] ?> & oid=<?php echo $row['o_id'] ?>" class="btn btn-info" onclick="return confirm('Are you sure???');"><h5>Click here if</h5> Order Delivered</a></td>

                                                <?php }else{ ?>

                                                    <td><a href="" class="btn btn-success">Delivered</a></td>

                                                <?php }?>





                                                
                                            </tr>
                                        <?php } ?>
                    
                </tbody>
                      </table>
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
