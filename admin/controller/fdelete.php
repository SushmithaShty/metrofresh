<?php
	include ('../../config.php');
	$admin=new Admin();
	echo $sid=$_GET['f_id'];

	$str=$admin->cud("delete from farmer where f_id='$sid'","Deleted");

	echo "<script>alert('deleted');window.location='../mngfarmer.php';</script>";
?>