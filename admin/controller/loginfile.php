<?php
	include '../../config.php';
	$admin=new Admin();

	$username=$_POST['username'];
	$password=$_POST['password'];


	$log= $admin->ret("SELECT * from `admin` where `username`='$username' and `password`='$password' ");
	
	$var=$log->rowCount();

	if($var>0)
	{
		$fetch=$log->fetch(PDO::FETCH_ASSOC);
		$aid=$fetch['a_id'];
		$_SESSION['a_id']=$aid;

		echo"<script>alert('login successfull...');window.location='../index.php';</script>";
	}
	else{
		echo"<script>alert('login failed...');window.location='../login/login.php';</script>";
	}
?>