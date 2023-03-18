<?php
include("conn.php");
session_start();
$did=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];
echo $query = "DELETE FROM booking Where uid='$did'AND pid='$pid'AND booking_status='1'AND provider_status='2'";
	
            $result = mysqli_query($conn,$query);
			 header("location:invoice.php");
?>