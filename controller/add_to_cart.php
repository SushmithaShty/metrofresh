<?php
	include '../config.php';
	$admin=new Admin();
	$item=$_GET['i_id'];
	$cid=$_GET['c_id'];
	$price=$_GET['price'];
	$quantity='1';
	

	$ins= $admin->cud("INSERT INTO `cart`(`i_id`,`c_id`, `price`,`quantity`,`date`) VALUES ('$item','$cid','$price','$quantity',now())","ins");

		echo"<script>alert('Product Added successfully...');window.location='../viewcart.php';</script>";

?>