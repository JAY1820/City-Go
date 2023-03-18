<?php
include("include/conn.php");
$id=$_REQUEST['id'];
 $query2 = "update city_mst set
		status='0'
		 where city_id='$id'";
	
             $result3 = mysqli_query($conn,$query2);
			 header("location:city.php");
			 ?>