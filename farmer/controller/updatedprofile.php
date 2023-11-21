<?php 
include '../../config.php';

$admin=new Admin();

$fid=$_SESSION['f_id'];

	$name=$_POST['f_name'];
	$email=$_POST['f_email'];
	$address=$_POST['f_address'];/**/
	$contact=$_POST['f_contact'];
	/*img=$_FILES["image"]["name"];
	move_uploaded_file($_FILES['image']['tmp_name'],"../../image/".$_FILES['image']['name']);
*/

	$stmt=$admin->cud("UPDATE `farmer` SET `f_name`='$name',`f_email`='$email',`f_address`='$address',`f_contact`='$contact' WHERE `f_id`='$fid'","updated");

echo "<script>alert('Profile updated');window.location='../manageprofile.php';</script>";

?>