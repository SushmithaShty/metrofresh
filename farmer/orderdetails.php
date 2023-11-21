<?php
  include ('../config.php');

  $admin=new Admin();

$f_id=$_SESSION['f_id'];


$id=$_GET['id'];

$stmt=$admin->ret("SELECT * FROM `orders` WHERE `f_id`='$f_id' AND `o_id`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

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
           








<h4>Order Status</h4>

<br><br>




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
                                                                
                                                                $stm=$admin->ret("SELECT * FROM `order_details` INNER JOIN `products` ON order_details.p_id=products.p_id WHERE `o_id`='$id'");
                                                                while($r=$stm->fetch(PDO::FETCH_ASSOC)){
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $r['od_id']?></td>
                                                                            <td><?php echo $r['p_name']?></td>
                                                                        
                                                                        
                                                                        <!-- <td><?php echo $r['prod_description']?></td> -->
                                                                        <td><?php echo $r['quantity']?></td>
                                                                        <td><?php echo $r['p_price']?></td>
                                                                        <td>₹<?php echo $r['p_price']*$r['quantity']?></td>

                                                                        
                                                                      


                                                                        
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