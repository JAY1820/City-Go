<?php
include("conn.php");
session_start();
 if (isset($_SESSION['pid']))
	 {
		
 $price="#Estimate After inspection";

 $pid=$_SESSION['pid'];
$sid=$_SESSION['service'];
$city=$_SESSION['city'];
$time=$_SESSION['btime'];
$date=$_SESSION['bdate'];
 $uid=$_SESSION['uid'];
if(isset($_REQUEST['add_cart']))
{
	$ssid=$_REQUEST['categories'];
	$sub_name=$_REQUEST['subservice'];
	$qty=$_REQUEST['bqty'];
 $query = "insert into booking( pid,sid,ssid,city,time,provider_status,sub_name,date,uid,booking_status,visiting_price,Qty) 
						values('$pid','$sid','$ssid','$city','$time',0,'$sub_name','$date','$uid',0,'$price','$qty')";
	
             $result = mysqli_query($conn,$query);
			 		header("location:booking3.php");
}


else
	
	{
		echo "failed";
		header("location:select provider.php");
	}
}


?>