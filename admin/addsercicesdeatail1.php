<?php
    
    include_once("includes/conn.php");
        
    if(isset($_POST['save']))
    {
                   $cname = strtoupper( $_POST['cname']);
				   $id = $_POST['staff'];
                   
    //  fileuploading
    
             // "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
       $query = "INSERT INTO service_detail ( c_name,sid) VALUE ('$cname','$id')";
	
             $result = mysqli_query($conn,$query);
			  header("location: service-detail1.php");
       		exit;
            }
			
    

?>