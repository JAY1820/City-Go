<?php
include("includes/conn.php");
$bid=$_REQUEST['bid'];
																 	$query = "update invoice set
															company=3
																 WHERE  bookingid='$bid' ";


																	
																			 $result23 = mysqli_query($conn,$query);
																			 								
																	 ?>
		                    <script>
			                       
			                        window.location.href='adminpay.php';
		                    </script>
		
		                <?php


?>