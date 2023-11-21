<?php
	include '../config.php';
	$admin=new Admin();

	$username=$_POST['username'];
	$password=$_POST['password'];


	$log= $admin->ret("SELECT * from `customer` where `c_username`='$username' and `password`='$password' ");
	
	$var=$log->rowCount();

	if($var>0)
	{
		$fetch=$log->fetch(PDO::FETCH_ASSOC);
		$cid=$fetch['c_id'];
		$_SESSION['c_id']=$cid;

		echo"<script>alert('login successfull...');window.location='../index.php';</script>";
	}
	else{
		echo"<script>alert('login failed...');window.location='../login/login.php';</script>";
	}
?>