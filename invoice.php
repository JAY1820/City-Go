<?php
session_start();
include('conn.php');
include('includes/header.php');

?>


    
    <!-- Start Banner Area -->
   <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>INVOICE</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>MY BOOKING</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <div class="reg-area default-padding-top">
        <div class="container">
            <div class="row">
			<div class="col-md-12 col-md-offset-1">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom">
                        <div class="site-heading text-left">
                             <p><strong>
													
                                                    <h3>Payment and policy Related Terms</h3><hr/><br/>
                                
                                • You don’t have to pay  any extra money rather than Visiting charge during first 2
                                hour or inspection<br/>
                                • Bill depend on the requirement of service in some specific case of service it will increases  or material cost from provider side<br/>
                                • you must have to give feedback from customer and tally bill with customers <br/>
                                • you must have to  tally bill with Provider and take sign of on it	 <br/></strong>
                                
                                </p><hr/>
                                <h2>Booking Status</h2>

<hr/>        

                        </div>
                                <form  method="post">
                                     <?php  

                                                        if(isset($_SESSION['uid'])){
                                                        $uid=$_SESSION['uid'];

                                                        ?>

                                                            <?php

                                                        $p1="select * from  Service_provider ";
                                                        $result11=mysqli_query($conn,$p1);
                                                        while($row12=mysqli_fetch_array($result11))
                                                        {
                                                            $pid1=$row12[0];
                                                       $sql1="Select sp.pname,u.name,b.uid ,s.s_name,b.sid, b.pid , b.date ,b.time,s.visiting_price ,b.provider_status,b.bookingid from service_provider sp,booking b ,services s ,user u where sp.pid=b.pid AND s.sid=b.sid AND b.uid='$uid' 
                                                        AND b.uid=u.uid AND booking_status=1  And b.pid=$pid1 AND b.provider_status=b.provider_status AND b.provider_status!=4 GROUP BY b.date" ;
                                                        
                                                        $result1=mysqli_query($conn,$sql1);
                                                        while($row1=mysqli_fetch_array($result1))
                                                        {
                                                            $pid=$row1[5];
                                                            $sid=$row1[4];
                                                            $ps=$row1[9];
                                                            $bdate=$row1[6];

                                                        ?>
						
                            <div class="row">
                                    <div>
                                            <h1 class="card-title text-bold" align="center">Service item</h1><br/>
                                        
                                        
                                        
                                        <h4 > Service Provider : <?php echo $row1[0]?>  </h4>
                                        <h4 >Date : <?php echo date("d/m/yy", strtotime( $row1[6]) );?> </h4>
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
										
										</h4  ><h4>Booking id: <?php echo $row1[10]?></h4><h4>
										
										
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
									<?php 
													      
       													  $query = "SELECT * FROM booking WHERE  uid=$uid AND  booking_status='1' AND pid=$pid AND sid=$sid AND provider_status=$ps AND date='$bdate' ";
													 $provider = mysqli_query($conn,$query);
													 
    											     if (mysqli_num_rows($provider) > 0) {
          													  while($row = mysqli_fetch_row($provider)) {  
                                                                    $_SESSION['pid1']  =$row[2];
													
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
							
                                <div class="form-group text-center col-sm-7" align="right">
										
										<?php if($row1[9]==0)
									{
									
									?>	
									<a   class="btn btn-danger" href="cancel.php?uid=<?php echo $row1[2];?>&pid=<?php echo $row1[5];?>"> Cancel booking</a>
									<?php
								} else if($row1[9]==1)
									{
                                     ?>

                                        <h2 style="text-align:center">Provider Contact</h2>
                                      <?php  $p2="select * from  Service_provider where pid=$pid";
                                                        $result111=mysqli_query($conn,$p2);
                                                        while($row121=mysqli_fetch_array($result111))
                                                        {
                                                        ?>

                                                    <div class="card">
                                                    <img src="gallery/<?php echo $row121[11]; ?>" alt="profile" style="width:100%">
                                                    <h2>Contact</button></h2>
                                                    <h4><?php echo $row121[4]; ?></h4>
                                                
                                                    <p class="title"><?php echo $row1[3]?></p>
                                                    <p><?php echo $row121[5]; ?></p>
                                                    <div style="margin: 24px 0;">
                                                        
                                                      <a href="#"><i class="fas fa-phone"></i>
                                                      <span><?php echo " " .$row121[9]; ?></span></a><br/>
                                                    <a href="mailto:<?php echo $row121[8]; ?>">  
                                                    <i class="fas fa-envelope"></i>
                                                      <span><?php echo " " .$row121[8]; ?></span>
                                                      </a>
                                                     
                                                    </div>
                                                                                             	
                                       
									<a href="#feedback-form" class="popup-with-form"> <span><h3> <button class="  btn btn-warning" >Feedback</button></p></h3></span></a>
													
                                                    </div>
													
													

                                                        <?php } ?>
                                                    <?php
							                    	}
									else if($row1[9]==2)
									{
										echo "Provider Unable To  serve you now! Select another PROVIDER";
											?>	
											<a class="btn btn-danger col-sm-11"  href="deletebooking.php?uid=<?php echo $row1[2];?>&pid=<?php echo $row1[5];?>"> Delete from list!</a>
											<?php
									}
									else if($row1[9]==3)
									{
										
										?>
										<a class="btn btn-primary form-control"  href="deletebooking1.php?uid=<?php echo $row1[2];?>&pid=<?php echo $row1[5];?>">Delete from list!</a>
										
										
										<?php
									
									}
										
									
									?>
										
										
                            
                        </div>

                        
							
						</div>
								    </div>
                               
                                </div>
                                <?php }
                            
                            }
                             ?>	
                                <?php
                                        }
                                        

                                            ?>
                                            
                                        
                        </form>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>
    <!-- End About -->
    <form method="post" id="feedback-form" class="mfp-hide white-popup-block">
        
        <div class="col-md-12 login-custom">
            <h4>Please Give Your Precious Review Feedbck</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group comments">
                       <textarea class="form-control" id="comments" name="message" placeholder="Tell Me About Your Query minimum 25 words *" pattern="[A-Za-z 0-9]{25}"  required></textarea>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="row">
                    <button type="submit" name="send">
                        send Review
                    </button>
                </div>
            </div>
            
        </div>
    </form>


<?php 
include('includes/footer.php');
include('includes/script.php');
?>