<?php 
session_start();
include('includes/conn.php');


if(!isset($_SESSION['auth']))
{
    ?>
     <script>
			      alert('Log In First');
			      window.location.href='login.php';
		     </script>
    <?php
}
else{
    
}
?>
<?php
include('includes/header.php');


?>
 <div class="container-fluid px-4">
     <h1 class="mt-4">Service Dashboard</h1>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
     </ol>

     <div class="row">
     <?php
                    $sqlcount = "SELECT (SELECT COUNT(*) FROM user u , invoice i  where i.uid= u.uid ) as u1,
                    (SELECT COUNT(*) FROM service_provider where status=1) as p1, 
					(SELECT COUNT(*) FROM user) as u, 
                    (SELECT COUNT(*) FROM city_mst where status=1) as c1,
                    (SELECT COUNT(*) FROM services) as s1,
					(SELECT sum(totalsubservice)  FROM invoice WHERE DATE(date) > (NOW() - INTERVAL 30 DAY)) as mt,
					(SELECT sum(round(visitingcharge/100*50))  FROM invoice WHERE company=3 AND DATE(date) > (NOW() - INTERVAL 30 DAY)) as mt1,
                    (SELECT COUNT(*) FROM booking where booking_status!='0')  as b1";
					
                    $resultcount =  mysqli_query($conn,$sqlcount);
                    if (mysqli_num_rows($resultcount)> 0) {
                    while($rowcount = mysqli_fetch_assoc($resultcount))
                        { 

                    ?>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-primary text-white mb-4">
                 <div class="card-body">Total Invoice Generated</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                     <p><?php echo $rowcount['u1'];?></p>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-warning text-white mb-4">
                 <div class="card-body">Service Categories</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3><?php echo $rowcount['s1'];?></h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-success text-white mb-4">
                 <div class="card-body">last 30days Sells</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3>Rs <?php echo $rowcount['mt'];?>.00/-</h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-danger text-white mb-4">
                 <div class="card-body">last 30days Collection</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3>Rs <?php echo $rowcount['mt1'];?>.00/-</h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-warning text-white mb-4">
                 <div class="card-body">Total User</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3><?php echo $rowcount['u'];?></h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-primary text-white mb-4">
                 <div class="card-body">Total Active Provider</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3><?php echo $rowcount['p1'];?></h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-danger text-white mb-4">
                 <div class="card-body">Total Active City</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3><?php echo $rowcount['c1'];?></h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-success text-white mb-4">
                 <div class="card-body">Total Service Booking</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h3><?php echo $rowcount['b1'];?></h3>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PROVIDERS FOR PER SERVICE
                    <a href="service.php" class="btn btn-warning float-end">VIEW SERVICE</a>
                    </h4>
                </div>
                <?php }} ?>
                <div class="card-body">
     <table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>SERVICE Name</th>
										<th>Visiting charge</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
								<?php
														
														
														
        

		 
       												  $sql = 'SELECT * from services';
        											 $result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_assoc($result)) {    


?>
									<tr>
										<td class="text-success text-uppercase"><?php echo $row['s_name']?></td>
										<td><?php echo $row['visiting_price']?></td>
										<td><a href="view-service.php?vid=<?php echo $row['sid']; ?>" class="btn btn-success">View</a></td>
										
									</tr>
									
													 <?php }} ?>							
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