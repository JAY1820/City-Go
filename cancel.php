<?php
include("conn.php");
session_start();
$uid=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];

echo $query = "update booking set
provider_status='3'

 WHERE  uid=$uid AND pid=$pid AND booking_status=1 AND provider_status='0'";


	
             $result = mysqli_query($conn,$query);
			 header("location:invoice.php");
?>