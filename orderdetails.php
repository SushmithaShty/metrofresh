
<?php
	include 'config.php';
	$admin=new Admin();
	$cid=$_SESSION['c_id'];
	if(!isset($_SESSION['c_id']))
	{
		header('Location:login/login.php');
	}



$id=$_GET['id'];

$stmt=$admin->ret("SELECT * FROM `orders` WHERE `c_id`='$cid' AND `o_id`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
						
						<h1>INVOICE </h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="product-section mt-150 mb-150">
        <div class="container">
        	<div class="row">
			






     
<div class="col-md-6" style="background-color: #A9A9A9">
                                                <div class="text-gray-light">INVOICE TO:</div>
                                                <h2 class="to"><?php echo $row['f_name']?> <?php echo $row['l_name']?></h2>
                                                <div class="address"><?php echo $row['addrs1']?></div>
                                                <div class="address"><?php echo $row['contact']?></div>
                                                <div class="address"><?php echo $row['state']?></div>
                                                <div class="address"><?php echo $row['pincode']?></div>
                                                <!-- <div class="email"><a href="mailto:john@example.com"><?php echo $row['d_email']?></a>
                                                </div> -->
                                            </div>
                                            <div class="col-md-6" style="background-color: #A9A9A9" style="float:right">
                                                <h1 class="invoice-id">INVOICE <?php echo $row['o_id']?></h1>
                                                <div class="date">Date of Invoice: <?php echo $row['date']?></div>
                                                <!-- <div class="date">Due Date: 30/10/2018</div> -->
                                            </div>
                                        </div>
                                        <!-- tbale here-->
                                        <div class="row">
                <table class="table align-middle mb-0" style="background-color: #A9A9A9">
                                    <thead class="table-light" style="background-color:  #EBF4FA">
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                            
                                          

                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php 
                                        
                                        $stm=$admin->ret("SELECT * FROM `order_details` INNER JOIN `items` ON order_details.i_id=items.i_id WHERE `o_id`='$id'");
                                        while($r=$stm->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                                <td><?php echo $r['od_id']?></td>
                                                    <td><?php echo $r['i_name']?></td>
                                                
                                                
                                                <!-- <td><?php echo $r['prod_description']?></td> -->
                                                <td><?php echo $r['quantity']?></td>
                                                <td><?php echo $r['i_price']?></td>
                                                <td>₹<?php echo $r['i_price']*$r['quantity']?></td>

                                                
                                              


                                                
                                            </tr>
                                            <?php 

                                            



                                        }?>
                                        
                                        
                                    </tbody>
                                </table>
            </div>
                                        <!--table ends here -->
                                        <br>
                                        <br>
                                        <br><br>
                                        <br><br>
                                        <div class="" style="text-align: center;">Thank you!</div>
                                        <!-- <div class="notices">
                                            <div>NOTICE:</div>
                                            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                                        </div> -->
                                    </main>
                                    <br>
                                    <br>
                                    <footer><center>Invoice was created on a computer and is valid without the signature and seal.</center></footer>
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
	



</body>
</html>