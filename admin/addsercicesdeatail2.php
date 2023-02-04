<?php
    
    include_once("includes/conn.php");
       
    if(isset($_POST['save']))
    {
                   $cname = strtoupper( $_POST['cname']);
				   $id = $_POST['staff'];
 
       $query = "INSERT INTO sub_service( ssid,sub_name) VALUE ('$id','$cname')";
	
             $result = mysqli_query($conn,$query);
			 "success";
			 header("location:service-detail2.php");
       		exit;
     }
			
    

?>