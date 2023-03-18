<?php 
session_start();
include('includes/header.php');
include('includes/conn.php');

?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>BOOKING HISTORY
                    </h4>
                </div>
                
                
                                <form  method="post">
                                    

                <?php


														$p2="select * from  user";
                                                        $result12=mysqli_query($conn,$p2);
                                                        while($row13=mysqli_fetch_array($result12))
                                                        {
                                                            $uid=$row13[0];

                                                        $p1="select * from  service_provider ";
                                                        $result11=mysqli_query($conn,$p1);
                                                        while($row12=mysqli_fetch_array($result11))
                                                        {
                                                            $pid1=$row12[0];
													
									
                                                       $sql1="Select sp.pname,u.name,b.uid ,s.s_name,b.sid, b.pid , b.date ,b.time,s.visiting_price ,b.provider_status,sp.contact ,u.p_no,b.bookingid from service_provider sp,booking b ,services s ,user u, invoice i where sp.pid=b.pid AND s.sid=b.sid AND b.uid='$uid' 
                                                        AND b.uid=u.uid AND booking_status=1  And b.pid=$pid1 AND b.provider_status=b.provider_status AND b.invoice!=2 GROUP BY  b.date" ;
                                                        
                                                        $result1=mysqli_query($conn,$sql1);
                                                        while($row1=mysqli_fetch_array($result1))
                                                        {
                                                            $pid=$row1[5];
                                                            $sid=$row1[4];
                                                            $ps=$row1[9];
                                                            $bdate=$row1[6];

                                                        ?>
						
                            <div class="row" align="center ">
                                    <div>
                                            <h1 class="card-title text-bold" align="center">Service item</h1><br/>
                                        
                                        
                                        <h4 > CUSTOMER: <?php echo $row1[1]?> (<?php echo $row1[11]?>) </h4>
                                        <h4 > Service Provider : <?php echo $row1[0]?> (<?php echo $row1[10]?>) </h4>
										
                                        <h4 >Date : <?php echo $row1[6]?> </h4>
                                        <h4 >Appointment Time : <?php echo $row1[7]?> </h4>
                                        <h4  >Service name: <?php echo $row1[3]?> </h4>
                                        <h4  >Booking Status: <?php 
                                        
                                        
                                        if($row1[9]==0)
									{
									echo "Confirmation Pending";
										
								} else if($row1[9]==1)
									{
										echo "Booking Request Confirmed";
										?>
										
										</h4><h4>Booking :<?php echo $row1[12]?> </h4>
										<?php
											
									}
									else if($row1[9]==2)
									{
										echo "Provider Unable To  serve you now!";
											
									}
									else if($row1[9]==3)
									{
										echo "booking Canelled";
									
                                    }
									else if($row1[9]==4)
									{
										echo "Service Was Served invoice generated";
										?>
										
										</h4><h4>Booking :<?php echo $row1[12]?> </h4>
										<?php
									
                                    }
                                    ?>  
                                        </h4>
                                                <h4  >Visiting Charge : Rs<?php echo $row1[8]?>/- </h4> 
                                      
                                                </div>               
                                <div class="col-lg-12">
                                <div class="table-responsive">
									<table class="table table-stripped" id="myTable" align="center" > 
                                    <thead class="bg bg-warning" align="center">
                                        <tr >
                                            <th >categories </th>
                                            <th >Service</th>
                                            <th>Sub-service</th>
                                            <th >Quantity</th>
											<th >price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
													      
       													  $query = "SELECT * FROM booking WHERE  uid=$uid AND  booking_status='1' AND pid=$pid AND sid=$sid AND provider_status=$ps group by date ";
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
							
                                
										
										
                            
								</div>

                        
							
						</div>
								
								   </div>
                               
                              	<?php }} ?>
								</div>
														
                        </form>

            </div>
        </div>
     </div>
<div>

<?php } ?>

<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>