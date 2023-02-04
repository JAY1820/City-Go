<?php
include('includes/conn.php');
$sid=$_REQUEST['sid'];
$uid=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];
$bdate=$_REQUEST['bdate'];
echo $query = "update booking set
provider_status='2'


 WHERE  uid=$uid AND pid=$pid AND booking_status='1'AND provider_status='0'AND date='$bdate'";


	
             $result = mysqli_query($conn,$query);
			 		header("location:pending.php");

?>