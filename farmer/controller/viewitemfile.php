<?php
	include '../../config.php';
	$admin=new Admin();

	$product=$_POST['product'];
	$des=$_POST['description'];
	$price=$_POST['price'];
	$id=$_POST['id'];


	$img=$_FILES["image"]["name"];
	move_uploaded_file($_FILES['image']['tmp_name'],"../../image/".$_FILES['image']['name']);


	

	$ins= $admin->cud("UPDATE `items` SET `i_name`='$name',`p_details`='$des',`p_price`='$price',`p_img`='$img' WHERE `p_id`='$id'","ins");
	echo"<script>alert('Updated Successfully...');window.location='../viewproduct.php';</script>";
?>