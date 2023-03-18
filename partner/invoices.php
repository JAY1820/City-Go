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
                    <h4>Invoice
                    </h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead >
                                        <tr>
                                            <th>invoice no</th>
                                            <th>customer name</th>
                                            <th>Service category</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
                                            <th>View Bills</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								
                                    <?php 
												
        
                                                $id=$_SESSION['pid'];													
                                                 $sql = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name from invoice i, booking b, user u ,service_provider sp ,services s 
                                             where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid AND b.pid='$id' AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2 GROUP BY b.date";
                                             $result =  mysqli_query($conn , $sql);

                                             if (mysqli_num_rows($result) > 0) {
                                                        while($row = mysqli_fetch_row($result)) {    

                            
                            ?>
                                <tr>
                                    <td><?php echo $row[0];?></td>
                                    <td><?php echo $row[2];?></td>
                                    <td><?php echo $row[5];?></td>
                                    <td><?php echo $row[4];?></td>
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
<?php }}?>												
<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>