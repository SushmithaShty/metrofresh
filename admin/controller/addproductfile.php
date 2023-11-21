<?php
	include '../../config.php';
	$admin=new Admin();

	$product=$_POST['product'];
	$des=$_POST['description'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$expiry=$_POST['date'];




	$targetDir='../../upload/';
	$image=$targetDir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);


	

	$ins= $admin->cud("INSERT INTO `products`(`p_name`,`p_img`,`p_details`,`p_price`,`stock`,`expiry_date`) VALUES ('$product','$image','$des','$price','$stock','$expiry')","ins");
	echo"<script>alert('Product Added Successfully...');window.location='../viewproduct.php';</script>";
?>