<?php
include("conn.php");
session_start();
$uid=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];


 $query = "update booking set
booking_status='1'


 WHERE  uid=$uid AND pid=$pid AND booking_status='0'";


	
             $result = mysqli_query($conn,$query);
			 		header("location:invoice.php");
?>