<?php
	include '../config.php';
	$admin=new Admin();
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$img=$_FILES["image"]["name"];
	move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
	$pass=$_POST['password'];

	$ins= $admin->cud("INSERT INTO `customer`(`c_name`, `c_username`, `c_email`, `c_phone`, `c_img`, `password`) VALUES ('$name','$uname','$email','$phone','$img','$pass')","ins");

		echo"<script>alert('Registration successfull...');window.location='../login/login.php';</script>";

?>