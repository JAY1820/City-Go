<?php  
session_start();
include('includes/conn.php');

if(isset($_SESSION['pid'])){
	
	$idp=$_SESSION['pid'];
	 echo $provider1="Select * From service_provider where pid='$idp'";
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
                    <h4>Accept Order
                    </h4>
                </div>
                <div class="card-body">
                <form  method="post">

                <?php

														$pid3=$_SESSION['pid'];

                                                        $p1="select * from  Service_provider  where pid='$pid3' ";
                                                        $result11=mysqli_query($conn,$p1);
                                                        while($row12=mysqli_fetch_array($result11))
                                                        {
                                                            $pid1=$row12[0];
															 $p2="select * from  user";
                                                        $result12=mysqli_query($conn,$p2);
                                                        while($row13=mysqli_fetch_array($result12))
                                                        {
                                                            $uid=$row13[0];
															
															
															
															
															
															
															
															
															
															
															
															
                                                  $sql1="Select sp.pname,u.name,b.uid ,s.s_name,b.sid, b.pid , b.date ,b.time,s.visiting_price ,b.provider_status,
                                                   u.p_no,b.bookingid from service_provider sp,booking b ,services s ,user u where sp.pid=b.pid AND s.sid=b.sid AND b.uid='$uid' 
                                                        AND b.uid=u.uid AND booking_status=1  And b.pid=$pid1 AND b.provider_status=1 AND b.invoice=1  GROUP BY b.date " ;
                                                        
                                                        $result1=mysqli_query($conn,$sql1);
                                                        while($row1=mysqli_fetch_array($result1))
                                                        {
                                                            $pid=$row1[5];
                                                            $sid=$row1[4];
                                                            $bid=$row1[11];
                                                            $bdate=$row1[6];
															$vp=$row1[8];


                                                        ?>

                    <div class="row">
                            <div>
                                    <h1 class="card-title text-bold" align="center">Service item</h1><br/>
                                
                                
                                
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
                            <thead class=>
                                <tr >
                                    <th >categories </th>
                                    <th >Service</th>
                                    <th>Sub-service</th>
                                    <th >Quantity</th>
                                    <th >price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php  $query = "SELECT * FROM booking WHERE  uid=$uid AND  booking_status='1' AND pid=$pid AND sid=$sid AND date='$bdate'  AND provider_status=1  AND bookingid='$bid'";
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
                        <br/>
                        <hr/>
                        <div class="row">
								
                                <?php  $p2="select * from user where uid=$uid";
                                                  $result111=mysqli_query($conn,$p2);
                                                  while($row121=mysqli_fetch_array($result111))
                                                  {
                                                  ?>

                                              <div class="card">
                                              <h2 style="text-align:center">Customer Contact</h2>
                                              <img src="../gallery/<?php echo $row121[6]; ?>" alt="profile"  height="150px" width="150px">
                                              <h3><?php echo $row121[1]; ?></h3>
                                             
                                          
                                              
                                              <p><?php echo $row121[5]; ?></p>
                                              <div style="margin: 24px 0;">
                                                  
                                                <a href="#"><i class="ion-ios-telephone"></i>
                                                <span><?php echo " " .$row121[4]; ?></span></a><br/>
                                              <a href="mailto:<?php echo $row121[2]; ?>">  
                                              <i class="ion-ios-email"></i>
                                                <span><?php echo " " .$row121[2]; ?></span>
                                                </a>
                                               
                                              </div>
                                                                                           
                                             
                                              
                                              </div>
                                              
                                              

                                                  <?php } ?>
                          
                                  <div class="form-group text-center col-sm-6" align="left">
                                  
                                  
                                  <a href="invoice1.php?bid=<?php echo $bid ;?>"class="btn btn-primary form-control" >Complete Service & Generate Invoice</a>									
                      
                          
                                  
                                  
                      
                                      </div>
                          
                  
                      
                      
                                    </div>
                      
                                   </div>
                          
                              </div>
                         </div>
                              <?php }}} ?>
                          </div>
         
                                
                    </form>
                                                    

             
															
															
                </div>
            </div>
        </div>
     </div>
<div>	
    <?php }}?>							
													
<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>