
<?php  
session_start();
include('includes/conn.php');



if(isset($_SESSION['pid'])){
	
	$idp=$_SESSION['pid'];
	  $provider1="SELECT * From service_provider where pid='$idp'";
	$providers=mysqli_query($conn , $provider1);
	while($pro=mysqli_fetch_array($providers)){
?>
<?php 

include('includes/header.php');


?>
<div class="container-fluid px-4">
     <h4 class="mt-4">Provider Dashboard</h4>
     
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Gerating Invoice
                    </h4>
                </div>
                <div class="card-body">


           		
	<div class="content container-fluid">
		<div class="reg-area default-padding-top">
			<div class="container">
				<div class="row">
				<div class="col-md-12 col-md-offset-1">
					<div class="reg-items">
						<div class="col-md-8 reg-form default-padding-bottom">
							<div class="site-heading text-left">
							   
								<hr/>
									<h2>Payment and policy Related Terms</h2><hr/><br/>
										
									<strong>	• You don’t have to charge any extra money rather than Visiting charge during first 2
										hour or inspection<br/>
										• you should be  charge minmum  money as service charge as respect to market cost of other vendors <br/>
										• Must include material Cost if put in service from your side<br/>
										• you must have to take feedback from customer and tally bill with customers <br/>
										• customers complaint not be tollrated any more <br/><strong>
										
										</p>
							</div>
									<form  method="POST">
										
	
					<?php
	
															
																$bid=$_REQUEST['bid'];
																
																
																
														  $sql1="Select sp.pname,u.name,b.uid ,s.s_name,b.sid, b.pid , b.date ,b.time,s.visiting_price ,b.provider_status,u.p_no,b.bookingid from service_provider sp,booking b ,services s ,user u where sp.pid=b.pid AND s.sid=b.sid AND b.uid=u.uid 
															AND b.uid=u.uid AND booking_status=1  And b.pid=sp.pid AND b.provider_status=1 AND b.bookingid='$bid' GROUP BY b.date " ;
															
															$result1=mysqli_query($conn,$sql1);
															while($row1=mysqli_fetch_array($result1))
															{
																$pid=$row1[5];
																$sid=$row1[4];
																$uid=$row1[2];
																$bdate=$row1[6];
																$vp=$row1[8];
																
																
																if (isset($_REQUEST['save']))
																	{
																		
																		 $mcost=$_POST['mcost'];
																	 $scost=$_POST['scost'];
																	 $totalc=$_POST['totalcharge'];

																	 $query1= "UPDATE invoice SET materialcost='$mcost', company=1, servicecharge='$scost', totalsubservice='$totalc' WHERE bookingid='$bid'";
																	 $result24 = mysqli_query($conn, $query1);

																		 $query = "update booking set
																	provider_status=4,
	
																	invoice=2
	
																	 WHERE  bookingid='$bid' ";
	
	
																		
																				 $result23 = mysqli_query($conn,$query);
																				 // invoice query
																	// 			  $query1= "update invoice set
																	// materialcost='$mcost',
																	// compay=1,
																	// servicecharge='$scost'
																	
	
																	//  WHERE  bookingid='$bid' ";
	
	
																		
																	// 		$result24 = mysqli_query($conn,$query1);
																			$mail1="select * from invoice where bookingid='$bid'";
																			   $mail12=mysqli_query($conn,$mail1);
															while($mail123=mysqli_fetch_array($mail12))
															{
																$to_email = $_SESSION['to_mail'];
	$subject = "Invoice";
	$body = "Dear Sir/Ma'am
	Thanks for  choosing us  . WE  hope you staisfy  From Our Service.
	Your Invoice no.:   ".$mail123['1']."
	Service Charge.: Rs ".$mail123['8']."
	Visiting charge.:  Rs ".$mail123['7']."
	Material Cost.:  Rs ".$mail123['9']."
	Total .:  Rs ".$mail123['10']."
	for printing  invoice visit  our  website you get from there...Stay Tunned with us For any Kind of  Service Just Log On City Service provider ..
	Thanks & Regards
	Team Home  Service Provider
	";
	$headers = "From: info.amul4577@gmail.com";
	 
	if (mail($to_email, $subject, $body, $headers)) {
	   
															
																		 ?>
								<script>
										alert('invoice Generated');
										window.location.href='invoices.php';
								</script>
			
							<?php
																	}
																	}}
	   ?>
							
								<div class="row">
										<div><hr/>
												<h1 class="card-title text-bold" align="center">Details</h1>
												<hr/>
											
											
											
											<h4 >Booking Id: <?php echo $row1[11]; ?> </h4>
											<h4 > Customer Name: <?php echo $row1[1]; ?> </h4>
											<h4 >Date : <?php echo $row1[6] ; ?> </h4>
											<h4 >Appointment Time : <?php echo $row1[7]; ?> </h4>
											<h4  >Service name: <?php echo $row1[3]; ?> </h4>
											<h4  >Booking Status: <?php 
											
											
											if($row1[9]==0)
										{
										echo "Confirmation Pending";
											
									} else if($row1[9]==1)
										{
											echo "Booking Request Confirmed";
												
										}
										else if($row1[9]==2)
										{
											echo "Provider Unable To  serve you now!";
												
										}
										else if($row1[9]==3)
										{
											echo "booking Canelled";
										
										}
										?>  
											</h4>
													<h4  >Visiting Charge : Rs<?php echo $row1[8]?>/- </h4> 
										  
													</div>               
									<div class="col-lg-12">
									<div class="table-responsive">
										<table class="table table-stripped" id="myTable" align="center" > 
										<thead class="bg bg-warning">
											<tr >
												<th >categories </th>
												<th >Service</th>
												<th>Sub-service</th>
												<th >Quantity</th>
												<th >price</th>
												
											</tr>
										</thead>
										<tbody>
										<?php   $query = "SELECT * FROM booking WHERE  bookingid='$bid'";
														 $provider = mysqli_query($conn,$query);
														 
														 if (mysqli_num_rows($provider) > 0) {
																	while($row = mysqli_fetch_row($provider)) {  
													
										?>
								
											<tr>
											
												<td><?php echo $row1[3];?>  </td>   
												<td><?php $ssid = $row[3];
															$query1 = "SELECT * FROM Service_detail WHERE  ssid=$ssid ";
															$service= mysqli_query($conn,$query1);
														 
																if (mysqli_num_rows($service) > 0) {
																	while($row2 = mysqli_fetch_row($service)) {    
																	echo $row2[1];
														 }}
												?></td>											
												<td><?php echo $row[7];?></td>
											  
												<td><?php echo $row[12];?></td>
												<td><?php echo $row[11];?></td>
											   
											</tr>
											
	
											 <?php		 
														 }}?>
											
										</tbody>
										
									</table>
									<hr/>
									<div class="row">
									
										  <?php  $p2="select * from user where uid=$uid";
															$result111=mysqli_query($conn,$p2);
															while($row121=mysqli_fetch_array($result111))
															{
															?>
	
														<div class="card">
														<h2 style="text-align:center">Customer Contact</h2>
														<img src="../gallery/<?php echo $row121[6]; ?>" alt="profile" height="200px" width="200px">
														<h3><?php echo $row121[1]; ?></h3>
													   
													
														
														<p><?php echo $row121[5]; ?></p>
														<div style="margin: 24px 0;">
															
														  <a href="#"><i class="ion-ios-telephone"></i>
														  <span><?php echo " " .$row121[4]; ?></span></a><br/>
														<a href="mailto:<?php echo $row121[2]; ?>">  
														<i class="ion-ios-email"></i>
														  <span><?php echo " " .$row121[2]; $_SESSION['to_mail']= $row121[2];  ?></span>
														  </a>
														 
														</div>
																									 
													   
														
														</div>
														
															
	
															<?php } ?>
							
											<div class="form-group text-center col-sm-6" align="left">
											<label> Material Cost</label>
											<input type="text" name="mcost" class="form-control" placeholder="Material Cost!"><br/>
											<label> Service Cost</label>
											<input type="text" name="scost" class="form-control" placeholder="service Cost!"><br/>
											<label> Total Charge</label>
											<input type="text" name="totalcharge" class="form-control" placeholder="Must Include Visiting Charge!"><br/>
											
											<button type ="submit" name="save" class="btn btn-primary form-control">
											Genrate Invoice
											</button>
											
											
								
									</div>
									
							
								
								
							</div>
								
							</div>
									
									   </div>
								   
									  <?php } ?>
									</div>
															
							</form>
						</div>
					</div>
					
					
					</div>
					
				</div>
			</div>
		</div>
		</div>
		</div>						
		<?php }} ?>			

				
				</div>
            </div>
        </div>
     </div>
<div>							
<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>  