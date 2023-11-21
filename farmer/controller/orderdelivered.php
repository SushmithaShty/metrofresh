<?php 
include '../../config.php';

$admin=new Admin();

$id=$_GET['id'];
$oid=$_GET['oid'];

$stmt=$admin->cud("UPDATE `order_details` SET `od_status`='order delivered' WHERE `od_id`='$id'","updated");

$st=$admin->cud("UPDATE `orders` SET `status`='order delivered' WHERE `o_id`='$oid'","updated");

echo "<script>window.location='../mngorder.php';</script>";



?>