<?php 
include('includes/header.php');

include('includes/conn.php');
?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PAYMENT
                    </h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <h3>Payment</h3>
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-warning">
                                        <tr>
                                            <th width="15%">invoice no</th>
                                            <th>customer name</th>
											 
                                            <th>Provider Name</th>
											<th>Categories name</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
                                            
											<th width="15%">Company Payment(50% visiting charge)</th>
											<th>Status</th>
											<th>View invoice Bills of customer</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
											function getPercentOfNumber($number, $percent){
																				return ($percent / 100) * $number;
																			}

        
																											
       												  $sql1 = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name ,i.visitingcharge from invoice i, booking b, user u ,service_provider sp ,services s 
													 where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid  AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2  AND i.company=1  GROUP BY b.date";
        											 $result1 =  mysqli_query($conn , $sql1);

    											     if (mysqli_num_rows($result1) > 0) {
          													  while($row = mysqli_fetch_row($result1)) {    
															  $vp=$row[6];
															  	
																		
									
									?>
                                        <tr>
                                            <td width="15%"><?php echo $row[0];?></td>
                                            <td><?php echo $row[2];?></td>
											<td><?php echo $row[3];?></td>
                                            <td><?php echo $row[5];?></td>
                                            <td><?php echo date("d/m/yy", strtotime( $row[4]) );?></td>
                                            <td><?php echo $row[1];?></td>
											<td><?php echo round( getPercentOfNumber($vp, 50));?></td>
											<td><h6>Payment Pending</h6></td>
											<td><a href="bill.php?bid=<?php echo $row[0];?>" class="btn btn-success"> VIEW BILLS</a></td>
											


                                        </tr>
													 <?php }}?>
                                      
                                    </tbody>
                                </table>
								</div>
                         
				<div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h3 class="card-title text-bold">Payment Confirmation Pending</h3>
                               
								<div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-primary">
                                        <tr>
                                            <th width="15%">invoice no</th>
                                            <th width="15%">customer name</th>
											<th width="15%">Provider Name</th>
                                            <th>Service category</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
                                            <th width="15%" >Company Payment(50% visiting charge)</th>
											<th >Status</th>
											<th >Confirm it</th>
											<th>View invoice Bills of customer</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												
        
												
       												  $sql2= "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name ,i.visitingcharge  from invoice i, booking b, user u ,service_provider sp ,services s 
													 where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid  AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2 AND i.company=2 GROUP BY b.date";
        											 $result2 =  mysqli_query($conn , $sql2);

    											     if (mysqli_num_rows($result2) > 0) {
          													  while($row1 = mysqli_fetch_row($result2)) {    
														$vp1=$row1[6];
									
									?>
                                        <tr>
                                            <td width="15%"><?php echo $row1[0];?></td>
                                            <td><?php echo $row1[2];?></td>
											<td><?php echo $row1[3];?></td>
                                            <td><?php echo $row1[5];?></td>
                                            <td><?php echo date("d/m/yy", strtotime( $row1[4]) );?></td>
                                            <td><?php echo $row1[1];?></td>
											<td><?php echo round( getPercentOfNumber($vp1, 50));?></td>
												<td><?php echo " Confirmatiom Pending " ;?></td>
												<td><a href="confirm.php?bid=<?php echo $row1[0];?>" class="btn btn-warning"> Confirmed</a></td>
												<td><a href="bill.php?bid=<?php echo $row1[0];?>" class="btn btn-success"> VIEW BILLS</a></td>
                                        </tr>
													 <?php }}?>
                                      
                                    </tbody>
                                </table>
								</div>
                      
				<div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h3 class="card-title text-bold">Paided Payment of Company</h3>
                               
								<div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-success">
                                        <tr>
                                            <tr>
                                            <th width="15%">invoice no</th>
                                            <th width="20%">customer name</th>
											<th>Provider Name</th>
                                            <th>Service category</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
                                            <th width="15%" >Company Payment(50% visiting charge)</th>
											<th >Status</th>
											<th>View invoice Bills of customer</th>
											
                                        </tr>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												
        
													
       												  $sql3 = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name ,i.visitingcharge  from invoice i, booking b, user u ,service_provider sp ,services s 
													 where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid  AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2  AND i.company=3 GROUP BY b.date";
        											 $result3 =  mysqli_query($conn , $sql3);

    											     if (mysqli_num_rows($result3) > 0) {
          													  while($row2 = mysqli_fetch_row($result3)) {    
															   $vp2=$row2[6];

									
									?>
                                         <tr>
                                            <td width="15%"><?php echo $row2[0];?></td>
                                            <td><?php echo $row2[2];?></td>
											<td><?php echo $row2[3];?></td>
                                            <td><?php echo $row2[5];?></td>
                                            <td><?php echo date("d/m/yy", strtotime( $row2[4]) );?></td>
                                            <td><?php echo $row2[1];?></td>
											<td><?php echo round( getPercentOfNumber($vp2, 50));?></td>
												<td><?php echo "Account Setteled " ;?></td>
												<td><a href="bill.php?bid=<?php echo $row2[0];?>" class="btn btn-success"> VIEW BILLS</a></td>
                                        </tr>
													 <?php }}?>
                                      
                                    </tbody>
                                </table>
								

                </div>
            </div>
        </div>
     </div>
<div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>