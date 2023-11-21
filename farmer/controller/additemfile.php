<?php
	include '../../config.php';
	$admin=new Admin();


$f_id=$_SESSION['f_id'];
	$name=$_POST['product'];
	$stock=$_POST['quantity'];
	$old_stock=$_POST['quantity'];
	$price=$_POST['price'];
	// $img=$_POST['img'];

	$targetDir='../../upload/';
	$image=$targetDir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);


	

	$ins= $admin->cud("INSERT INTO `items`(`i_name`,`old_stock`, `stock`,`i_price`,`i_img`,`f_id`) VALUES ('$name','$old_stock','$stock','$price','$image','$f_id')","ins");
	echo"<script>alert('Item Added Successfully...');window.location='../viewitem.php';</script>";
?>