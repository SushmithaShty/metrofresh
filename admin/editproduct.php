<?php
  include ('../config.php');
  $admin=new Admin();
  $id=$_GET['id'];

  $var=$admin->ret("select * from products where p_id='$id'");
  $row=$var->fetch(PDO::FETCH_ASSOC); 

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
            
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <!-- p class="card-description"> Horizontal form layout </p -->
                    <form class="forms-sample" method="POST" action="controller/editproductfile.php" enctype="multipart/form-data">
                       <input type="hidden" class="form-control" name="id" id="exampleInputUsername2" placeholder="Product" value="<?php echo $row['p_id'];?>" required>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="product" id="exampleInputUsername2" placeholder="Product" value="<?php echo $row['p_name'];?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="image" id="exampleInputEmail2" placeholder="" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label"> Description</label>
                        <div class="col-sm-9">
                          <input type="text" name="description" value="<?php echo $row['p_details'];?>" class="form-control" id="exampleInputMobile" placeholder="Description" required>
                        </div>
                      </div>
                      
                        <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $row['p_price'];?>"name="price" id="exampleInputMobile" placeholder="Price" required>
                        </div>
                      </div>
                                                                 
                      <button type="submit" class="btn btn-primary mr-2">Edit</button>
                      
                    </form>
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