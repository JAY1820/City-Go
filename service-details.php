<?php 
include('includes/header.php');
?>


 <!-- Start Banner Area -->
 <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Service Details</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>SERVICE DETAILS</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Service Details Area -->

                <?php 
				$sid=$_REQUEST['sid'];
				
				$query = "SELECT * from services where sid='$sid'";
				$services = mysqli_query($conn, $query);
				while ($row =  mysqli_fetch_row($services)) {
				 
				
				
				
				?>
    <div class="service-details pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-text-area">
                            <div class="title">
                                <h2><?php echo $row[1]; ?></h2>
                            </div>
                        <img src="gallery\<?php echo $row[3]; ?>" alt="image" hieght="250px" width="550px">
                            <!-- <div class="title">
                                <h2></h2>
                            </div> -->
                            <div class="title">
                                <!-- <h4>Rs.<?php echo $row['4']; ?>.00</h4> -->
                                <h4>visit Charge</h4>
                                    <span> &#8377 <?php echo $row['4'];?></span><span class="star-style">*</span>
                            </div>
                            <div>
                                <p><?php echo $row['2'];?></p>
                            </div> <br>
                        
                        
                        <form method="post" name="booking">
				
                        <input type="submit" id="bookMyService" name="book" value="Book Now" class=" effect btn-md btn btn-dark effect  form-control"  />
                   
                        </form>
                        <hr>
                        <!-- <div class="vendor-name">
                                        <strong>Go Cashless : </strong><p>Pay Online after your service PayTm and other.</p>
                                        <strong>Professionals</strong><p>Inhouse Verified and Trained Professionals</p>
                                        <strong>Insurance</strong><p>Upto Rs 5000 against damages<br />AMC Available</p>
                                            
                                           <strong> Service Guarantee</strong>
                                        <p>Service Guarantee Upto 365 Days of Service*(AMC)</p>
                                        
                                        
                                    </div> -->
                                        
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="details-page-sidebar pl-20 pt-30">
                        <div class="sidebar">
                            <!-- <div class="search-box">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here . ." required="">
                                        <button class="btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                        <!-- <div class="sidebar-section categories-list">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Renovation</a></li>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Plumber</a></li>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Electrical</a></li>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Painter</a></li>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Carpentry</a></li>
                                <li><a href="service-details.html"><i class="far fa-star"></i> Home Maintenance</a></li>
                            </ul>
                        </div> -->
                        <div class="sidebar-section opening-hours">
                            <h3>Opening Hours</h3>
                            <ul>
                                <li><span>Mon - Sat</span> <span>8:00 AM - 8:00 PM</span></li>
                                <!-- <li><span>Fri - Sat</span> <span>8:00 AM - 3:00 PM</span></li> -->
                                <li><span>Sun</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <br> <hr>
                        <div class="vendor-name">
                                        <strong>Cash on delivry : </strong><p>Pay when your service has been done by service guy.</p>
                                        <strong>Professionals</strong><p>Inhouse Verified and Trained Professionals</p>
                                        <strong>Insurance</strong><p>Upto Rs 5000 against damages<br />AMC Available</p>
                                            
                                           <strong> Service Guarantee</strong>
                                        <p>Service Guarantee Upto 365 Days of Service*(AMC)</p>
                                        
                                        
                                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details Area -->
    <?php
		
		
	}	?>
    <?php
	$sid=$_REQUEST['sid'];
	
	if(isset($_REQUEST['book']))
	{
		
		
        $_SESSION['service']=$sid;
        ?>
        <script>
               
                window.location.href='booking.php';
        </script>

    <?php
		
		
	}	?>

<?php 
include('includes/footer.php');
include('includes/script.php');
?>