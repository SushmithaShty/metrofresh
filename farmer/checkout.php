<?php
  include ('../config.php');

  $admin=new Admin();

$f_id=$_SESSION['f_id'];

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
           













<div class="container">
  <div class="py-5 text-center">
    
    <!-- <h2>Checkout form</h2> -->
  
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <?php 
             $gtotal=0;
            $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `products` ON cart.p_id=products.p_id WHERE `f_id`='$f_id'");
            $num=$st->rowCount()?>
            

      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill" style="color:black"><?php echo $num?></span>
      </h4>
      <ul class="list-group mb-3">
       <?php  while( $ro=$st->fetch(PDO::FETCH_ASSOC)){?>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0" style="color:black"><?php echo $ro['p_name']?></h6>
            <!-- <small class="text-muted"><?php echo $ro['prod_description']?></small> -->
          </div>
          <!-- <span class="text-muted">₹<?php echo $ro['price']?></span> -->
          <!-- <span class="text-muted"><?php echo $ro['quantity']?> Piece</span> -->
        <p style="color:black">₹<?php echo $total=$ro['quantity']*$ro['p_price']?></p>
        </li>
    <?php 

$gtotal=$gtotal+$total;
} ?>
<br><br>
    <div class="order-total">
     <h5 style="margin-left: 160px">Order total <span>₹<?php echo $gtotal?></span></h5>
    </div>
       
        
      </ul>

      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="controller/order_pay.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" name="f_name" required>
           
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" name="l_name" required>
            
          </div>
        </div>

       

        

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="Address" name="addrs1" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Address2" name="addrs2">
        </div>

       <div class="row">
        <div class="col-md-4 mb-3">
            <label for="firstName">Contact</label>
            <input type="text" class="form-control" id="firstName" placeholder="Contact" name="contact" required>
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="firstName">State</label>
            <input type="text" class="form-control" id="firstName" placeholder="State" name="state" required>
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="lastName">Pin Code</label>
            <input type="text" class="form-control" id="lastName" placeholder="Pincode" name="pincode" required>
            
          </div>
        </div>

        <hr class="mb-4">
        <!-- <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div> -->
        <!-- <hr class="mb-4"> -->

        <h4 class="mb-3">Payment</h4>

        <div class="payment-methods">
                            <div class="Pement">
              
                                
                            </div>
                            <div class="card-info pt-40 ">

                                
                                <br>
                                

                                <input type="radio" name="payment_method" value="upi" id="upi" onclick="cardform(this.value)">&nbsp;
                                <label style="font-family: 'Open Sans', sans-serif;">UPI / Netbanking</label>
                                <div style="display:none;" id="upi_div">

                                    <div class="Pement">
                                    <div class="form-box">
                                        <label>Scan and Pay</label>
                                        <img src="../qr.png" height="100px" width="100px">
                                        
                                    </div>
                                    <br>
                                    <div class="form-box">
                                        <label>Trans / Id</label>
                                        <input type="text" name="transaction" placeholder="0000 0000 0000 0000 ">

                                        
                                    </div>
                                </div>
                                    
                                    
                                </div><br>

                                <input type="radio" name="payment_method" value="card" id="card" onclick="cardform(this.value)">&nbsp;
                                <label style="font-family: 'Open Sans', sans-serif;padding-bottom: 15px;">Debit Card / Credit Card</label><br>
                                <div style="display:none;" id="card_div">
                                    <div class="form-box">
                                        <label>Card No</label>
                                        <input  type="text" placeholder="0000 0000 0000 0000 " name="card_no">
                                    </div>
                                    <div class="form-box">
                                        <label>Expiry</label>
                                        <input type="text" placeholder="MM / YY" minlength="5" maxlength="5" name="expiry">
                                    </div>
                                    
                                </div>

                                
                                    
                                
                            </div>
                        </div>

                        <div class="col-md-12">
                    <div class="order-btn text-center mt-30">
                        <input type="hidden" value="<?php echo $gtotal?>" name="total_amt">

                        <input type="hidden" value="<?php echo $f_id?>" name="user_id">

                      


                        <input type="submit" value="Place Order" class="order-btn text-center mt-30"style="background-color:#07212e;color:white;padding:20px;border-radius: 20px ">
                    </div>
                </div>

      </form>
    </div>
  </div>


</div>




     
                        
                              
                                                     
                        
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

    <script>
    
        function cardform(myvalue) {

            if (myvalue == 'card') { //radio button id
                document.getElementById('card_div').style.display = 'block'; //div id
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'none';

            } else if(myvalue == 'upi') {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'block';
                document.getElementById('cash_div').style.display = 'none';
            } else {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'block';
            }

        }
        
    
</script>
    <!-- End custom js for this page -->
  </body>
</html>