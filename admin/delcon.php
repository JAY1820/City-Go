
<?php
include("includes/conn.php");
$did=$_REQUEST['did'];
$query = "delete from contact where cont_id='$did'";
	
             $result = mysqli_query($conn,$query);
		
	header("location:contact.php");
       	exit;
		?>