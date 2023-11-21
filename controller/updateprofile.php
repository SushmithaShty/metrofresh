<?php 
include '../config.php';

$admin=new Admin();

$cid=$_SESSION['c_id'];

	$name=$_POST['fullname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	/*img=$_FILES["image"]["name"];
	move_uploaded_file($_FILES['image']['tmp_name'],"../../image/".$_FILES['image']['name']);
*/

	$stmt=$admin->cud("UPDATE `customer` SET `c_name`='$name',`c_email`='$email',`c_phone`='$contact' WHERE `c_id`='$cid'","updated");

echo "<script>alert('Profile updated');window.location='../account.php';</script>";

?>