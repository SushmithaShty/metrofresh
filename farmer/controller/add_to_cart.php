<?php
	include '../../config.php';
	$admin=new Admin();
	$pid=$_GET['p_id'];
	$fid=$_GET['f_id'];
	$price=$_GET['price'];
	$quantity='1';
	

	$ins= $admin->cud("INSERT INTO `cart`(`p_id`,`f_id`, `price`,`quantity`,`date`) VALUES ('$pid','$fid','$price','$quantity',now())","ins");

		echo"<script>alert('Product Added successfully...');window.location='../viewcart.php';</script>";

?>