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
           



<h4 style="color:red;">Order Status</h4>

<br><br>








<table class="table align-middle mb-0" style="background-color: #A9A9A9">
                                    <thead class="table-light" style="background-color:  #EBF4FA">
                                        <tr>
                                            <th>Order_Id</th>
                                            <th>Total Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            
                                            <th></th>
                                            <th></th>

                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php 
                                        
                                        $st=$admin->ret("SELECT * FROM `orders` WHERE `f_id`='$f_id'");
                                        while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['o_id']?><br><td>₹<?php echo $row['total_amt']?></td>
                                                
                                                
                                                <td><?php echo $row['date']?></td>

                                                <?php if($row['status']=='order received'){?>
                                                <td style="color:blue;"><?php echo $row['status']?></td>
                                            <?php }else{?>
                                                <td style="color:green;"><?php echo $row['status']?></td>
<?php } ?>

                                                
                                                <td><a class="btn btn-info" href="orderdetails.php?id=<?php echo $row['o_id']?>" style="color:white"> View Details</a></td>


                                                
                                            </tr>
                                            <?php 

                                            



                                        }?>
                                        
                                        
                                    </tbody>
                                </table>



     
                        
                              
                                                     
                        
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