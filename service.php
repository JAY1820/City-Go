<?php 
include('includes/header.php');
?>
<!-- Start Banner Area -->
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Our Services</h1>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li>SERVICES</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


   
    <!-- Start Service Area -->
    <div class="service pt-100">
        <div class="container">
            <div class="default-section-heading default-section-heading-middle">
                <h6>OUR SERVICES</h6>
                <h3>Service We Provide</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <?php  
                                
                                $sql = "SELECT * from services ";
                               $result =  mysqli_query($conn , $sql);
   
                                   if (mysqli_num_rows($result) > 0) {
                              while($row1 = mysqli_fetch_assoc($result)) {    
   
   
                                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        
                        
                        <div class="service-card-2">
                            <!-- <i class="flaticon-medal"></i> -->

                            <img src="gallery/<?php echo $row1['s_img']; ?>"  height="250px" width="300px" alt="">
                            <h4><a href="service.php"><?php echo $row1['s_name']; ?></a></h4>
                            <p><?php echo $row1['description']; ?></p>
                            <a class="read-more-btn" href="service-details.php?sid=<?php echo $row1['sid']; ?>">Read More</a>
                           
                        </div>
                       
                    </div>
                    <?php }} ?>
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-2">
                            <i class="flaticon-customer-support"></i>
                            <h4><a href="service-details.html">Carpenter</a></h4>
                            <p>Lorem ipsum dolor amet magna consectetur adipiscing next labor eiusmod incididunt labore.</p>
                            <a class="read-more-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-2">
                            <i class="flaticon-quality"></i>
                            <h4><a href="service-details.html">Electrical</a></h4>
                            <p>Lorem ipsum dolor amet magna consectetur adipiscing next labor eiusmod incididunt labore.</p>
                            <a class="read-more-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-2">
                            <i class="flaticon-light-bulb"></i>
                            <h4><a href="service-details.html">Painting</a></h4>
                            <p>Lorem ipsum dolor amet magna consectetur adipiscing next labor eiusmod incididunt labore.</p>
                            <a class="read-more-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-2">
                            <i class="flaticon-flash"></i>
                            <h4><a href="service-details.html">Cleaning</a></h4>
                            <p>Lorem ipsum dolor amet magna consectetur adipiscing next labor eiusmod incididunt labore.</p>
                            <a class="read-more-btn" href="service-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-2">
                            <i class="flaticon-building"></i>
                            <h4><a href="service-details.html">Air Conditioning</a></h4>
                            <p>Lorem ipsum dolor amet magna consectetur adipiscing next labor eiusmod incididunt labore.</p>
                            <a class="read-more-btn" href="service-details.html">Read More</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area -->


<?php 
include('includes/footer.php');
include('includes/script.php');
?>