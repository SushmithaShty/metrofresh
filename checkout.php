
<?php
	include 'config.php';
	$admin=new Admin();
	$cid=$_SESSION['c_id'];
	if(!isset($_SESSION['c_id']))
	{
		header('Location:login/login.php');
	}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php include'header.php'?>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						
						<h1>Checkout</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="product-section mt-150 mb-150">
        <div class="container">
			



       


<div class="container">
  <div class="py-5 text-center">
    
    <!-- <h2>Checkout form</h2> -->
  
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <?php 
             $gtotal=0;
            $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `items` ON cart.i_id=items.i_id WHERE `c_id`='$cid'");
            $num=$st->rowCount()?>
            

      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"><?php echo $num?></span>
      </h4>
      <ul class="list-group mb-3">
       <?php  while( $ro=$st->fetch(PDO::FETCH_ASSOC)){?>

        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo $ro['i_name']?></h6>
            <!-- <small class="text-muted"><?php echo $ro['prod_description']?></small> -->
          </div>
          <!-- <span class="text-muted">₹<?php echo $ro['price']?></span> -->
          <!-- <span class="text-muted"><?php echo $ro['quantity']?> Piece</span> -->
        ₹<?php echo $total=$ro['quantity']*$ro['i_price']?>
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
                                        <img src="qr.png" height="100px" width="100px">
                                        
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

                        <input type="hidden" value="<?php echo $cid?>" name="user_id">

                      


                        <input type="submit" value="Place Order" class="order-btn text-center mt-30"style="background-color:#07212e;color:white; ">
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
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	
	<!-- end find our location -->

	<!-- google map section -->
	
	<!-- end google map section -->


	<!-- footer -->
	<?php include'footer.php'?>
	<!-- end footer -->
	
	<!-- copyright -->

	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	


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
</body>
</html>