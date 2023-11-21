<?php
	include '../../config.php';
	$admin=new Admin();
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	


	$targetDir='../../upload/';
	$image=$targetDir.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $image);

	$email=$_POST['email'];
	$contact=$_POST['phone'];
	$address=$_POST['address'];
	$pass=$_POST['password'];
	

	$ins= $admin->cud("INSERT INTO `farmer`(`f_name`, `username`,`f_img`,`f_email`,`f_contact`,`f_address`, `password`) VALUES ('$name','$uname','$image','$email','$contact','$address','$pass')","ins");
	echo"<script>alert('Registration successful...');window.location='../login/login.php';</script>";
?>