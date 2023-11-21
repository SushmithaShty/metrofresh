<?php
	include ('../../config.php');
	$admin=new Admin();
	echo $sid=$_GET['c_id'];

	$str=$admin->cud("delete from customer where c_id='$sid'","Deleted");

	echo "<script>alert('Deleted');window.location='../mngcustomer.php';</script>"
?>