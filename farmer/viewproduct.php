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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    background: #e2eaef;
    font-family: "Open Sans", sans-serif;
}
h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 60px;
}
h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    border-radius: 1px;
    background: #00a25b;
    left: 0;
    right: 0;
    bottom: -20px;
}
.carousel {
    margin: 50px auto;
    padding: 0 70px;
}
.carousel .item {
    /*color: #daacc8;*/
    color: #00a25b;
    min-height: 325px;
    text-align: center;
    overflow: hidden;
}
.carousel .thumb-wrapper {
    padding: 25px 15px;
    background: #fff;
    border-radius: 6px;
    text-align: center;
    position: relative;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
    height: 120px;
    margin-bottom: 20px;
    width: 100%;
    position: relative;
}
.carousel .item img {   
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
    position: absolute;
    bottom: 0;
    margin: 0 auto;
    left: 0;
    right: 0;
}
.carousel .item h4 {
    font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
    margin-bottom: 5px;
}
.carousel .thumb-content .btn {
    color: #7ac400;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #00a25b;
    padding: 6px 14px;
    margin-top: 5px;
    line-height: 16px;
    border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
    color: #fff;
    background: #00a25b;
    box-shadow: none;
}
.carousel .thumb-content .btn i {
    font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .item-price {
    font-size: 13px;
    padding: 2px 0;
}
.carousel .item-price strike {
    opacity: 0.7;
    margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
    height: 44px;
    width: 40px;
    background: #7ac400;    
    margin: auto 0;
    border-radius: 4px;
    opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
    background: #78bf00;
    opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
    font-size: 36px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -19px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: #fff;
    text-shadow: none;
    font-weight: bold;
}
.carousel-control-prev i {
    margin-left: -2px;
}
.carousel-control-next i {
    margin-right: -4px;
}       
.carousel-indicators {
    bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 50%;
    border: none;
}
.carousel-indicators li {   
    background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {    
    background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 99;
    cursor: pointer;
    font-size: 16px;
    color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
    color: #ff6161;
}
.star-rating li {
    padding: 0;
}
.star-rating i {
    font-size: 14px;
    color: #ffc000;
}
</style>
<script>
$(document).ready(function(){
    $(".wish-icon i").click(function(){
        $(this).toggleClass("fa-heart fa-heart-o");
    });
}); 
</script>
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
            
            









<div class="col-md-12">
            <br><br>
            <h2 style="color:white">Farming Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>  -->  
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <?php 

                        $stmt=$admin->ret("SELECT * FROM `products`");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>

                            <div class="col-sm-3" style="padding:10px">
              <div class="thumb-wrapper">
                <!-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> -->
                <div class="img-box">
                  <img src="../metro_fresh/image/<?php echo $row['p_img'] ?>" class="img-fluid" alt="">                 
                </div>
                <div class="thumb-content">
                  <h4><b><?php echo $row['p_name'] ?></b></h4> 
                  <br>
                  <p class="item-price"><?php echo $row['p_details'] ?></p>
                  <!-- <p class="item-price"><?php echo $d_arr[$row['s_id']] ?></p> -->

                  
                  <p class="item-price">₹  <b><?php echo $row['p_price'] ?></b></p>
                  <a href="controller/add_to_cart.php?p_id=<?php echo $row['p_id'] ?> & price=<?php echo $row['p_price'] ?> & f_id=<?php echo $fid ?> " class="btn btn-primary" style="color:black">Add to Cart</a>
                </div>            
              </div>
            </div>
        <?php }?>
                        
                              
                                                     
                        
                    </div>
                </div>  
               
                
            </div>
            <!-- Carousel controls -->
            <!-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->
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
