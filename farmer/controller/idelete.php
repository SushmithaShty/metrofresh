<?php
	include ('../../config.php');
	$admin=new Admin();
	$id=$_GET['id'];

	$str=$admin->cud("delete from `items` where `i_id`='$id'","Deleted");

	echo "<script>alert('Deleted');window.location='../viewitem.php';</script>";
?>