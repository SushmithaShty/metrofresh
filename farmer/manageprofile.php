<!doctype html>
<html lang="en">
<?php 

include '../config.php';

$admin=new Admin();

$fid=$_SESSION['f_id'];

$st=$admin->ret("SELECT * FROM `farmer` WHERE `f_id`='$fid'");
$row=$st->fetch(PDO::FETCH_ASSOC);

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
            
           <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">User Profile</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <!-- <li class="breadcrumb-item active" aria-current="page"></li> -->
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
              
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="main-body">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="../metro_fresh/upload/<?php echo $row['f_img']?>" alt="Farmer" class="rounded-circle p-1 bg-primary" width="110">
                      <div class="mt-3">
                        <h4><?php echo $row['f_name']?></h4>
                        <p class="mb-1"><?php echo $row['f_email']?></p>
                        <p class="font-size mb-1"><?php echo $row['f_contact']?></p>
                        <p class="font-size-sm mb-1"><?php echo $row['f_address']?></p>   
                      </div>
                    </div>
                    <hr class="" />
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="controller/updatedprofile.php">
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['f_name']?>" name="f_name" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9">                        
                        <input type="text" class="form-control" value="<?php echo $row['f_email']?>" name="f_email"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Contact</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['f_contact']?>" name="f_contact"/>
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['f_address']?>" name="f_address"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9">
                        <input type="submit" name="f_edit" class="btn btn-light px-4" value="Save Changes" onclick="return confirm('Are you sure??????');">
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                
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
