
<?php
	include 'config.php';
	$admin=new Admin();
	$cid=$_SESSION['c_id'];
	if(!isset($_SESSION['c_id']))
	{
		header('Location:login/login.php');
	}

	$st=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
$row=$st->fetch(PDO::FETCH_ASSOC);
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
						
						<h1>Account</h1>
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






<div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="image/<?php echo $row['c_img']?>" alt="Admin" class="rounded-circle p-1" style="background-color:#F28123" width="110">
                      <div class="mt-3">
                        <h4><?php echo $row['c_name']?></h4>
                        <p class="mb-1"><?php echo $row['c_email']?></p>
                        <p class="font-size mb-1"><?php echo $row['c_phone']?></p>
                        <!-- <p class="font-size-sm mb-1"><?php echo $ro['address']?></p> -->
                        
                      </div>
                    </div>
                    <hr class="" />
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="controller/updateprofile.php">
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['c_name']?>" name="fullname" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['c_email']?>" name="email"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['c_phone']?>" name="contact"/>
                      </div>
                    </div>
                    
                    <!-- <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $row['address']?>" name="address"/>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9" style="padding:10px">
                        <input type="submit" name="edit" class="btn btn-danger px-4" value="Save Changes" onclick="return confirm('Are you sure??????');">
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                
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