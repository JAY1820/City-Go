<?php 
include('includes/header.php');

include('includes/conn.php');
?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pending Payment
                    </h4>
                </div>
                <div class="card-body">
                    <!-- pending -->
                    <table class="table table-striped custom-table">
								<thead>
									<tr>
										 <th >invoice no</th>
                                            
                                            <th>Provider Name</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
                                            
											<th >Company Payment(50% visiting charge)</th>
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
          													  while($row32 = mysqli_fetch_row($result1)) {    
															  $vp=$row32[6];
															  	
																		
									
									?>
									<tr>
										<td ><?php echo $row32[0];?></td>
                                            
											<td><?php echo $row32[3];?></td>
                                           
                                            <td><?php echo date("d/m/yy", strtotime( $row32[4]) );?></td>
                                            <td><?php echo $row32[1];?></td>
											<td><?php echo round( getPercentOfNumber($vp, 50));?></td>
											<td><span class="btn btn-danger"><h6>Payment Pending</h6></span></td>
											<td><a href="bill.php?bid=<?php echo $row32[0];?>" class="btn btn-success"> VIEW BILLS</a></td>
											
										
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