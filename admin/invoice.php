<?php 
include('includes/header.php');
include('includes/conn.php');

?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>INVOICE
                    </h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-primary">
                                        <tr>
                                            <th>Invoice no</th>
                                            <th>Customer name</th>
											<th>Provider name</th>
                                            <th>Service category</th>
                                            <th>Invoice date</th>
											<th>Invoice Value</th>
                                            <th>View Bills</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												
        
												
       												  $sql = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name from invoice i, booking b, user u ,service_provider sp ,services s 
													 where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2 GROUP BY b.date ORDER BY i.id desc";
        											 $result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {    

									
									?>
                                        <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><?php echo $row[2];?></td>
											<td><?php echo $row[3];?></td>
                                            <td><?php echo $row[5];?></td>
                                            <td><?php echo date("d/m/yy", strtotime( $row[4]) );?></td>
                                            <td><?php echo $row[1];?></td>
											<td><a href="bill.php?bid=<?php echo $row[0];?>" class="btn btn-success"> VIEW BILLS</a></td>

                                        </tr>
													 <?php }}?>
                                      
                                    </tbody>
                                </table>
								</div>
                </div>
            </div>
        </div>
     </div>
<div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>