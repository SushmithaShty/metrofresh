<?php

include '../../config.php';

$admin=new Admin();

$id=$_GET['id'];

   $a=$admin->cud("delete from `cart` where `cart_id`='$id'","Deleted");
   echo "<script>alert('Removed Successfully......');window.location='../viewcart.php';</script>";


?>