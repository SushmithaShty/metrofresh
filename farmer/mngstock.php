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
                    <h4 class="card-title">View Stock</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        







<thead>
                    <tr>
                       <tr>
                                            <th>Item</th>
                                            <th>Image</th>
                                            <!-- <th>Description</th> -->
                                            <th>Price / Kg</th>
                                            <th>Total Product </th>
                                            <th>Product Sold</th>
                                            <th>Product Remaining</th>
                                            
                                        </tr>
                    </tr>
                </thead>
                <tbody>
                <?php 
                                        $st=$admin->ret("SELECT * FROM `items` WHERE `f_id`='$fid'");
                                        while($row=$st->fetch(PDO::FETCH_ASSOC)){?>
                                            <tr>
                                                <td><?php echo $row['i_name']?></td>
                                                <td><img src="image/<?php echo $row['i_img']?>" width="75px" height="80px"></td>
                                                <td><?php echo $row['i_price']?></td>
                                                <td><?php echo $row['old_stock']?> Kg</td>
                                                <td><?php echo $row['old_stock']-$row['stock']?> Kg</td>
                                               
                                                <td><?php echo $row['stock']?> Kg</td>
                                                
                                                
                                                
                                                
                                            
                                                
                                    
                                            </tr>



                                        <?php }?>
                    
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
