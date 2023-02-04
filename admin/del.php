<?php
include("includes/conn.php");
$id=$_REQUEST['id'];
 $query2 = "delete from feedback
		 where fid='$id'";
	
             $result3 = mysqli_query($conn,$query2);
			 header("location:feedback.php");
			 ?>