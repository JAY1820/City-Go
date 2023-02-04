<?php
include("includes/conn.php");
$id=$_REQUEST['id'];
 $query2 = "UPDATE service_provider SET
		status='2'
		 WHERE pid='$id'";
	
             $result3 = mysqli_query($conn,$query2);
			 header("location:service-provider.php");
			 ?>