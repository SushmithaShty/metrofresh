
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

	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- end -->
<style type="text/css">
  /*body{*/
    /*background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
}*/
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}
</style>

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
						
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="product-section mt-150 mb-150">
        <div class="container">
			



       





<div class="card">
            <div class="row">
                <div class="col-md-12 cart">
                    <div class="title">
                      <?php 
                            $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `items` ON cart.i_id=items.i_id WHERE  `c_id`='$cid'");
                            $num=$st->rowCount();
                            if($num==0){?>

                              <div class="row">
                                <div class="col"><h4><b>Shopping Cart</b></h4></div>
                                 <div class="col align-self-center text-right text-muted">No items in your cart</div>
                              </div>

                               
                           <?php  }else{ ?>

                      

                            <div class="row">
                                <div class="col" ><h4><b>Shopping Cart</b></h4></div>
                                 <div class="col align-self-center text-right text-muted"></div><?php echo $num ?> Items</div>
                              </div>
                                   <div id="tablecart">

                              <?php 
                                        $gtotal=0;
                                        $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `items` ON cart.i_id=items.i_id WHERE `c_id`='$cid'");
                                        while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                            ?>


<!-- cross mark = &#10005;-->
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="metro_fresh/image/<?php echo $row['i_img'] ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?php echo $row['i_name'] ?></div>
                                <!-- <div class="row"><?php echo $row['prod_description'] ?></div> -->
                            </div>

                            <div class="col">
                                <button onclick="decrement(<?php echo $row['cart_id']?>)" >-</button>

                                <input type="text" id="<?php echo $row['cart_id']?>"  value="<?php echo $row['quantity']?>" name="quantity" readonly>
                                <button onclick="increment(<?php echo $row['stock']?>,<?php echo $row['cart_id']?>)">+</button>
                            </div>
                            
                            <div class="col">₹ <?php echo $row['i_price'] ?> </div> 
                            <div class="col">Total ₹<?php  echo $total=$row['quantity']*$row['i_price']?></div>

                           <div class="col"> <span class="close"><a href="controller/deletecart.php?id=<?php echo $row['cart_id']?>">Remove</a></span></div>
                        </div>
                    </div>
                  <?php 
                  $gtotal=$gtotal+$total;

              } ?>

                    <div class="back-to-shop"><a href="product.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
                

                <div class="col-md-12 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS </div>
                        <div class="col text-right"> <?php echo $num ?></div>
                    </div>
                   
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL</div>
                        <div class="col text-right">₹<?php echo $gtotal?></div>
                    </div>
                    <a class="btn" href="checkout.php" style="color:white">CHECKOUT</a>
                </div>
              </div>
              

              <?php } ?>

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
        function increment(stock,cartid){
            // alert('out of stock'+stock);


            var qty=document.getElementById(cartid).value;
            qty=parseInt(qty)+1;
            
            if(qty>stock){

                alert('out of stock');
            }else{
                document.getElementById(cartid).value=qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("tablecart").innerHTML = this.responseText;
                }
            };
                xmlhttp.open("GET", "controller/updatecart.php?cartid=" + cartid+'&qty='+qty, true);
                xmlhttp.send();

            }

        }
        
        function decrement(cartid){

            var qty=document.getElementById(cartid).value;
            qty=parseInt(qty)-1;
            if(qty>0){
                
                document.getElementById(cartid).value=qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("tablecart").innerHTML = this.responseText;
                }
            };
                xmlhttp.open("GET", "controller/updatecart.php?cartid=" + cartid+'&qty='+qty, true);
                xmlhttp.send();

            }

        }
    </script>
	
</body>
</html>