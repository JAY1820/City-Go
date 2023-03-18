<?php 
session_start();

include('conn.php');
include('includes/header.php');
?>
<?php 
    
    
    if(isset($_REQUEST['step1']))
         {
		$_SESSION['city']=$_REQUEST['city'];
		$_SESSION['service']=$_REQUEST['service'];
		$_SESSION['bdate']=$_REQUEST['bdate'];
		$_SESSION['btime']=$_REQUEST['btime'];
		if(isset($_SESSION['error_msg_service']));
		{
		if($_SESSION['service']=='Select Categories')
		{
			$_SESSION['error_msg_service']="<pre>Please Select categories</pre> ";
			header("location:index.php");
		}
		}

 }
$id=$_SESSION['service'];
$city=$_SESSION['city'];
    
    ?>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
<!-- Start Banner Area -->
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Booking</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Booking</li>
                    <li>Booking</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="reg-area default-padding-top" align="center">
        <div class="container">
            <div class="row">
			<div class="col-md-12 col-md-offset-1">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom">
                        <div class="site-heading text-left">
                            <h2>Select Service Provider</h2>
                        </div>
                        <form action="booking3.php" method="post">
						
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="table-responsive">
									<table  class="table table-stripped class" id="myTable" cellspacing="2" cellpadding="2">
                                    <thead class="bg bg-warning">
                                        <tr>
                                            <th>Name</th>
                                            <th>Experience </th>
                                            <th>image</th>
                                            <th>city</th>
                                            <th>No. of order atteneded</th>
											<th>choose</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
	
		 
													
												 $query = "SELECT * FROM service_provider WHERE  sid=$id AND city='$city'AND status=1";
													 $provider = mysqli_query($conn,$query);
													 
    											     if (mysqli_num_rows($provider) > 0) {
          													  while($row1 = mysqli_fetch_row($provider)) {    

									 
									?>
                                        <tr>
                                            <td><?php echo $row1[3];?></td>
                                            <td><?php echo $row1[14]." years";?></td>
                                            <td><img src="gallery/<?php echo $row1[11];?>" class="avatar" height="80" width="80"/></td>
                                            
                                            <td><?php echo $row1[5];?></td>
                                            <td>	<?php 
	
                                                                    $pid1=$row1[0];
                                                                                                
                                                $query1 = "SELECT count(*) FROM invoice WHERE  pid='$pid1'";
                                                    $provider1 = mysqli_query($conn,$query1);
                                                    
                                                    
                                                            while($row6 = mysqli_fetch_row($provider1)) {    
                                                                    echo $row6[0];
                                                            }

                                                    ?></td>
											<td><a href="pid_session.php?pid=<?php echo $row1[0];?>" class="form-control btn btn-warning">SELECT<a></td>

                                        </tr>
													 <?php }}?>
                                      
                                    </tbody>
                                </table>
								</div>
								</div>
                               
                            </div>
                        </form>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>

<?php 
include('includes/footer.php');
include('includes/script.php');
?>