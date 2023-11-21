<?php
	include ('../../config.php');
	$admin=new Admin();
	$id=$_GET['id'];

	$str=$admin->cud("delete from `products` where `p_id`='$id'","Deleted");

	echo "<script>alert('Deleted');window.location='../viewproduct.php';</script>";
?>