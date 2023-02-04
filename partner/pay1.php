<?php
include("includes/conn.php");
$bid=$_REQUEST['bid'];
																 	$query = "update invoice set
															company=2
																 WHERE  bookingid='$bid' ";


																	
																			 $result23 = mysqli_query($conn,$query);
																			 								
																	 ?>
		                    <script>
			                        alert('payment Send company Will confirm you very soon');
			                        window.location.href='adminpay.php';
		                    </script>
		
		                <?php


?>