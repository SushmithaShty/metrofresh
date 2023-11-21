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
            
            


          






<div class="card">
            <div class="row">
                <div class="col-md-12 cart">
                    <div class="title">
                      <?php 
                            $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `products` ON cart.p_id=products.p_id WHERE  `f_id`='$fid'");
                            $num=$st->rowCount();
                            if($num==0){?>

                              <div class="row">
                                <div class="col" style="color:black;"><h4><b>Shopping Cart</b></h4></div>
                                 <div class="col align-self-center text-right text-muted">No items in your cart</div>
                              </div>

                               
                           <?php  }else{ ?>

                      

                            <div class="row">
                                <div class="col" style="color:black;"><h4><b>Shopping Cart</b></h4></div>
                                 <div class="col align-self-center text-right text-muted"></div><?php echo $num ?> Items</div>
                              </div>
                                   <div id="tablecart">

                              <?php 
                                        $gtotal=0;
                                        $st=$admin->ret("SELECT * FROM `cart` INNER JOIN `products` ON cart.p_id=products.p_id WHERE  `f_id`='$fid'");
                                        while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                            ?>


<!-- cross mark = &#10005;-->
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="../metro_fresh/image/<?php echo $row['p_img'] ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?php echo $row['p_name'] ?></div>
                                <!-- <div class="row"><?php echo $row['prod_description'] ?></div> -->
                            </div>

                            <div class="col">
                                <button onclick="decrement(<?php echo $row['cart_id']?>)" >-</button>

                                <input type="text" id="<?php echo $row['cart_id']?>"  value="<?php echo $row['quantity']?>" name="quantity" readonly>
                                <button onclick="increment(<?php echo $row['stock']?>,<?php echo $row['cart_id']?>)">+</button>
                            </div>
                            
                            <div class="col">₹ <?php echo $row['p_price'] ?> </div> 
                            <div class="col">Total ₹<?php  echo $total=$row['quantity']*$row['p_price']?></div>

                           <div class="col"> <span class="close"><a href="controller/deletecart.php?id=<?php echo $row['cart_id']?>">Remove</a></span></div>
                        </div>
                    </div>
                  <?php 
                  $gtotal=$gtotal+$total;

              } ?>

                    <div class="back-to-shop"><a href="viewproduct.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
                

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
    <!-- End custom js for this page -->
  </body>
</html>
