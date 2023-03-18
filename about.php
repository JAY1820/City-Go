<?php 
include('includes/header.php');
include('conn.php');
?>

   <!-- Start Banner Area -->
   <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>About Us</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>ABOUT US</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start About Area -->
    <?php 
	
		 
													
    $query = "SELECT * FROM about_us ";
        $provider = mysqli_query($conn,$query);
        
        if (mysqli_num_rows($provider) > 0) {
                   while($row1 = mysqli_fetch_row($provider)) {    


?>
    <div class="about inner-about pb-100 bg-f9fbfe">
        <div class="about-content">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="">
                            <img src="gallery/<?php echo $row1[3]?>" hieght="750%" width="150%" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="about-text-area">
                            <div class="default-section-heading">
                                <h3><?php echo $row1[1]?></h3>
                                <p>
                        <?php echo $row1[2]?>
                        </p>
                            </div>
                            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium lorem sit doloremque, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam quia voluptas lorem sit amet labore magna dolore sit architecto beatae vitae dicta sunt.</p> -->
                            <div class="about-card">
                                <i class="flaticon-mission"></i>
                                <h4>Our Mission</h4>
                                <p>Who loves or pursues or desires to obtain pain of itself, because it is pain occasio</p>
                            </div>
                            <div class="about-card">
                                <i class="flaticon-eye"></i>
                                <h4>Our Vision</h4>
                                <p>Who loves or pursues or desires to obtain pain of itself, because it is pain occasio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
<?php }}?>

  
<?php 
include('includes/footer.php');
include('includes/script.php');
?>