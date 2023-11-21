<?php 

include '../../config.php';

$admin=new admin();

$fid=$_SESSION['f_id'];
$cartid=$_GET['cartid'];
$qty=$_GET['qty'];


$stmt=$admin->cud("UPDATE `cart` SET `quantity`='$qty' WHERE `cart_id`= '$cartid'","saved");
// echo "";
$st=$admin->ret("SELECT * FROM `cart` INNER JOIN `products` ON cart.p_id=products.p_id WHERE  `f_id`='$fid'");
                            $num=$st->rowCount();

?>
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