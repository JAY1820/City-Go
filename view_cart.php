<?php 

session_start();
include('conn.php');
include('includes/header.php');
?>
<!-- Start Banner Area -->
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Our Services</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="reg-area default-padding-top">
        <div class="container">
            <div class="row">
			<div class="col-md-12 col-md-offset-1">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom">
                        <div class="site-heading text-left">
                            <h2>Your Cart Service  Items </h2>
                        </div>
                        <form  method="post">
                        <?php  

                                                        if(isset($_SESSION['uid'])){
                                                        $uid=$_SESSION['uid'];

                                                        ?>

                                                            <?php

                                                        $p1="select * from  Service_provider";
                                                        $result11=mysqli_query($conn,$p1);
                                                        while($row12=mysqli_fetch_array($result11))
                                                        {
                                                            $pid1=$row12[0];
                                                        $sql1="Select sp.pname,u.name,b.uid ,s.s_name,b.sid, b.pid , b.date ,b.time,s.visiting_price  from service_provider sp,booking b ,services s ,user u where sp.pid=b.pid AND s.sid=b.sid AND b.uid='$uid' 
                                                        AND b.uid=u.uid AND booking_status=0  And b.pid=$pid1  LIMIT 1" ;
                                                        
                                                        $result1=mysqli_query($conn,$sql1);
                                                        while($row1=mysqli_fetch_array($result1))
                                                        {
                                                            $pid=$row1[5];
                                                            $sid=$row1[4];

                                                        ?>
						
                            <div class="row">
                                    <div>
                                            <h1 class="card-title text-bold" align="center">Service item</h1><br/>
                                        
                                        
                                        
                                        <h4 > Service Provider : <?php echo $row1[0]?>  </h4>
                                        <h4 >Date : <?php echo $row1[6]?> </h4>
                                        <h4 >Appointment Time : <?php echo $row1[7]?> </h4>
                                        <h4  >Service name: <?php echo $row1[3]?> </h4>
                                                <h4  >Visiting Charge : Rs<?php echo $row1[8]?>/- </h4> 
                                                </div>               
                                <div class="col-lg-12">
                                <div class="table-responsive">
									<table class="table table-stripped" id="myTable"> 
                                    <thead class="bg bg-warning">
                                        <tr >
                                            <th width="15%">categories </th>
                                            <th width="15%">Service</th>
                                            <th width="20%">Sub-service</th>
                                            <th width="15%">Quantity</th>
											<th width="15%">price</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
													      
       													 $query = "SELECT * FROM booking WHERE  uid=$uid AND  booking_status='0' AND pid=$pid AND sid=$sid";
													 $provider = mysqli_query($conn,$query);
													 
    											     if (mysqli_num_rows($provider) > 0) {
          													  while($row = mysqli_fetch_row($provider)) {    
													
									?>
							
                                        <tr>
										
                                            <td width="15%"><?php echo $row1[3];?>  </td>   
											<td><?php $ssid = $row[3];
														$query1 = "SELECT * FROM Service_detail WHERE  ssid=$ssid ";
														$service= mysqli_query($conn,$query1);
													 
															if (mysqli_num_rows($service) > 0) {
          													  while($row2 = mysqli_fetch_row($service)) {    
																echo $row2[1];
													 }}
											?></td>											
											<td width="15%"><?php echo $row[7];?></td>
                                          
                                            <td width="15%"><?php echo $row[12];?></td>
											<td width="20%"><?php echo $row[11];?></td>
                                           <td><a href="delcart.php?did=<?php echo $row[0];?>">Remove<a></td>
                                        </tr>
										 <?php		 
													 }}?>
										
                                    </tbody>
										
                                </table>
                                <br><br>
							
										<div class="form-group text-center col-sm-11" align="right">
                            <a href="bookingconvirsion.php?uid=<?php echo $row1[2];?>&pid=<?php echo $row1[5];?>"><button type="button" class="btn btn-danger form-control" >Book Now</button></a>
                        </div>
                        <div class="form-group text-center col-sm-11" align="left">
                            <a href="invoice.php"><button type="button" class="btn btn-danger form-control" >view Booking</button></a>
                        </div>
							
						</div>
								    </div>
                               
                                </div>
                                <?php } } ?>	
                                
                        </form>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>


<?php }?>

<?php 
include('includes/footer.php');
include('includes/script.php');
?>