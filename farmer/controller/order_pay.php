<?php 

include '../../config.php';

$admin=new Admin();

$pay=$_POST['payment_method'];

$trans1=$_POST['transaction'];
$cno3=$_POST['card_no'];
$expiry3=$_POST['expiry'];

if($pay==""){

	echo"<script>alert('Incomplete Transaction...');window.location='../checkout.php';</script>";

}elseif($pay=='upi' && $trans1==""){

	echo"<script>alert('Incomplete Transaction...Give Transaction Id...');window.location='../checkout.php';</script>";

}elseif($pay=='card' && $cno3=="" && $expiry3==""){

	echo"<script>alert('Incomplete Transaction...Give Card details...');window.location='../checkout.php';</script>";
}else{

	$total_amt=$_POST['total_amt'];
$user_id=$_POST['user_id'];
// $user_type=$_POST['user_type'];

$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$addrs1=$_POST['addrs1'];
$addrs2=$_POST['addrs2'];
$contact=$_POST['contact'];
// $city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];



$status='order received';



$stmt=$admin->Rcud("INSERT INTO `orders` (`total_amt`, `f_id`, `f_name`, `l_name`, `addrs1`, `addrs2`, `contact`, `pincode`, `state`, `date`, `status`) VALUES ('$total_amt','$user_id','$fname','$lname','$addrs1','$addrs2','$contact','$pincode','$state',now(),'$status')","saved");






if($pay=='upi'){
		

		$trans=$_POST['transaction'];

		$dots='-----';


		$st=$admin->cud("INSERT INTO `payment` (`o_id`,`f_id`,`p_method`,`trans_id`,`card_no`,`expiry`,`p_amt`,`p_date`) VALUES('$stmt','$user_id','$pay','$trans','$dots','$dots','$total_amt',now())","saved");

		

	}
	if($pay=='card'){


	    $cno1=$_POST['card_no'];
	    $expiry1=$_POST['expiry'];

	    $dots1='-----';


	    $stm=$admin->cud("INSERT INTO `payment` (`o_id`,`f_id`,`p_method`,`trans_id`,`card_no`,`expiry`,`p_amt`,`p_date`) VALUES('$stmt','$user_id','$pay','$dots1','$cno1','$expiry1','$total_amt',now())","saved");

	     

	}


	$cart=$admin->ret("SELECT * FROM `cart` WHERE  `f_id`='$user_id' ");
	while($row=$cart->fetch(PDO::FETCH_ASSOC)){

	

		$price=$row['price'];
		$qty=$row['quantity'];
		$prod=$row['p_id'];


		$od=$admin->Rcud("INSERT INTO `order_details`( `o_id`, `f_id`,`p_id`,`quantity`,`price`) VALUES ('$stmt','$user_id','$prod','$qty','$price')","saved");

		$q=$admin->ret("SELECT * FROM `order_details` WHERE `p_id`='$prod' AND `f_id`='$user_id' AND `od_id`='$od' ");

		while($r=$q->fetch(PDO::FETCH_ASSOC)){

			$pd=$r['p_id'];
			$qt=$r['quantity'];

			$p=$admin->ret("SELECT * FROM `products` WHERE `p_id`='$pd'");
			$sp=$p->fetch(PDO::FETCH_ASSOC);

			$newqty=$sp['stock']-$qt;
			$spid=$sp['p_id'];

			$update=$admin->cud("UPDATE `products` SET `stock`='$newqty' WHERE `p_id`='$spid'","updated");




		}


	}


	$s=$admin->cud("DELETE FROM `cart` WHERE `f_id`='$user_id' ","deleted");


echo "<script>alert('Your order has been placed....');window.location='../orderstatus.php';</script>";


}






?>