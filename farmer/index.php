
<?php 
include '../config.php';

$admin=new Admin();


$stmt=$admin->ret("SELECT COUNT(*) FROM `customer`");
$arow=$stmt->fetch(PDO::FETCH_ASSOC);
$c=implode($arow);

$st=$admin->ret("SELECT COUNT(*) FROM `products`");
$brow=$st->fetch(PDO::FETCH_ASSOC);
$p=implode($brow);


$s=$admin->ret("SELECT COUNT(*) FROM `orders` WHERE `f_id`='0'");
$crow=$s->fetch(PDO::FETCH_ASSOC);
$o=implode($crow);

$stmnt=$admin->ret("SELECT COUNT(*) FROM `feedback`");
$frow=$stmnt->fetch(PDO::FETCH_ASSOC);
$f=implode($frow);


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $c?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="fa fa-users " style="padding:10px">

                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Customers</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $p?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="fa fa-suitcase">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Products</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $o?></h3>
                          <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="fa fa-line-chart">
                          <!-- <span class="mdi mdi-arrow-bottom-left icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Orders</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo $f?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="fa fa-file-text-o ">
                          <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Feedback</h6>
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