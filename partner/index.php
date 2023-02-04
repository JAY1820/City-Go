<?php  
session_start();
include('includes/conn.php');
if(!$_SESSION['pid'])
{
    echo "<script> alert('Login Fisrt')</script>";
    header('Location: login.php');
}

if(isset($_SESSION['pid'])){
	
	$idp=$_SESSION['pid'];
	  $provider1="Select * From service_provider where pid='$idp'";
	$providers=mysqli_query($conn , $provider1);
	while($pro=mysqli_fetch_array($providers)){
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
				$id=$_SESSION['pid'];
				
                    $sqlcount = "SELECT (SELECT COUNT(*) FROM booking   where pid=$id AND booking_status='1' ) as u1,
                    (SELECT COUNT(*) FROM invoice  where pid=$id) as p1, 
					(SELECT COUNT(*) FROM user) as u, 
                    (SELECT COUNT(*) FROM city_mst where status=1) as c1,
                    (SELECT COUNT(*) FROM feedback where pid=$id) as s1,
					(SELECT sum(totalsubservice)  FROM invoice WHERE DATE(date) > (NOW() - INTERVAL 30 DAY)) as mt,
					(SELECT sum(totalsubservice-(round(visitingcharge/100*50)) ) FROM invoice WHERE pid=$id AND DATE(date) > (NOW() - INTERVAL 30 DAY)) as mt1,
                    (SELECT COUNT(*) FROM booking where booking_status!='0')  as b1";
					
                    $resultcount =  mysqli_query($conn,$sqlcount);
                    if (mysqli_num_rows($resultcount)> 0) {
                    while($rowcount = mysqli_fetch_assoc($resultcount))
                        { 

                    ?>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-primary text-white mb-4">
                 <div class="card-body">Total Accept Request</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                 <h4><?php echo $rowcount['p1'];?></h4>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-md-6 ">
             <div class="card bg-warning text-white mb-4">
                 <div class="card-body">Total Booking Request</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4><?php echo $rowcount['u1'];?></h4>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                 
             </div>
         </div>
         <div class="col-xl-3 col-md-6">
             <div class="card bg-success text-white mb-4">
                 <div class="card-body">30 Days Income</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                        <h4><?php echo $rowcount['mt1'];?></h4>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                 
             </div>
         </div>
         <!-- <div class="col-xl-3 col-md-6">
             <div class="card bg-danger text-white mb-4">
                 <div class="card-body">Danger Card</div>
                 
             </div>
         </div> -->
         <?php }} ?>
     </div>
         
   <?php }}?>  

<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>