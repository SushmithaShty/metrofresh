<?php
	include '../config.php';
	$admin=new Admin();
	
	$msg=$_POST['message'];
	$id=$_POST['id'];

	$ins= $admin->cud("INSERT INTO `feedback`(`c_id` ,`msg`,`date`) VALUES ('$id','$msg',now())","ins");

		echo"<script>alert('Sent successfully...');window.location='../index.php';</script>";

?>