<?php
	include '../../config.php';
	$admin=new Admin();

	$product=$_POST['product'];
	$quantity=$_POST['stock'];
	$price=$_POST['price'];
	$id=$_POST['id'];


	
	$targetDir='../../upload/';
	$image=$targetDir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);

	

	$ins= $admin->cud("UPDATE `items` SET `i_name`='$product',`stock`='$quantity',`i_price`='$price',`i_img`='$image' WHERE `i_id`='$id'","ins");
	echo"<script>alert('Updated Successfully...');window.location='../viewitem.php';</script>";
?>