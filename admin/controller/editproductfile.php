<?php
	include '../../config.php';
	$admin=new Admin();

	$product=$_POST['product'];
	$des=$_POST['description'];
	$price=$_POST['price'];
	$id=$_POST['id'];


	$targetDir='../../upload/';
	$image=$targetDir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);

	

	$ins= $admin->cud("UPDATE `products` SET `p_name`='$product',`p_details`='$des',`p_price`='$price',`p_img`='$image' WHERE `p_id`='$id'","ins");
	echo"<script>alert('Updated Successfully...');window.location='../viewproduct.php';</script>";
?>