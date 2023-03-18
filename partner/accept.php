<?php
include('includes/conn.php');
$sid=$_REQUEST['sid'];
$uid=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];
$bdate=$_REQUEST['bdate'];
$vp=$_REQUEST['vp'];
 $bid= $pid.$uid.$sid.$bdate;
echo $query = "update booking set
provider_status=1,
bookingid='$bid',
invoice=1

 WHERE  uid=$uid AND pid=$pid AND booking_status='1'AND provider_status='0'AND date='$bdate' AND sid='$sid' ";


	
             $result = mysqli_query($conn,$query);
			 echo $invoice1="insert into invoice(bookingid,uid,pid,sid,date,visitingcharge)values('$bid','$uid','$pid','$sid','$bdate','$vp')";
																	$invoice2=mysqli_query($conn ,$invoice1);	
			 	header("location:viewaccept.php");

?>