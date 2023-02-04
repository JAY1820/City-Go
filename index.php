<?php 
session_start();
include('conn.php');
include('includes/header.php');
?>



  <!-- Start Banner Area -->
  <div class="main-banner bg-f9fbfe">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text-area">
                        <h1>Need any type of Handyman services </h1>
                        <p> We provide best home service provider for you </p>
                        <a class="default-button" href="service.php">Our Service</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img">
                        <img src="assets/images/banner/banner-1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start Features Area -->
    <div class="features pb-70">
        <div class="container">
            <div class="feature-content">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12 col-ms-12 col-sm-12 col-12">
                        <div class="feature-card-area">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="feature-card">
                                        <i class="flaticon-industry"></i>
                                        <h4>Fast</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="feature-card">
                                        <i class="flaticon-building"></i>
                                        <h4>Loyalty</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-ms-12 col-sm-12 col-12">
                        <div class="feature-card-area">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="feature-card">
                                        <i class="flaticon-industry"></i>
                                        <h4>Reliable</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="feature-card">
                                        <i class="flaticon-building"></i>
                                        <h4>Quality</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- End Features Area -->
    
    <!-- Start About Area -->
    <div class="about pb-100 bg-f9fbfe">
        <div class="about-content">
            <div class="container">
                <div class="row ">
                <?php  
                                
                                $sql = "SELECT * from about_us";
                               $result =  mysqli_query($conn , $sql);
   
                                   if (mysqli_num_rows($result) > 0) {
                              while($row2 = mysqli_fetch_assoc($result)) {    
   
   
                                    ?>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="">
                            <img src="gallery/<?php echo $row2['image']; ?>" alt="image" width="1500px" height="1000px">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="about-text-area">
                            <div class="default-section-heading">
                                <h6><?php echo $row2['title']; ?></h6>
                                <h3>Our goal is to help customers identify the need to maintain facilities</h3>
                            </div>
                            <p>
                               <?php echo $row2['description']; ?></p>
                            
                            
                            <a class="default-button" href="about.php">Read More</a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
    <!-- Start service Area -->
    <div class="service service-bg pt-100">
        <div class="container">
            <div class="service-content">
                <div class="default-section-heading default-section-heading-middle">
                    <h6>OUR SERVICES</h6>
                    <h3>We Provide Best Service</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="service-section-content">
        <div class="container">
            <div class="service-card-slider owl-carousel">
            <?php  
                                
                                $sql = "SELECT * from services ORDER BY s_name DESC LIMIT 4";
                               $result =  mysqli_query($conn , $sql);
   
                                   if (mysqli_num_rows($result) > 0) {
                              while($row1 = mysqli_fetch_assoc($result)) {    
   
   
                                    ?>
                <div class="service-card">
                    <i class="flaticon-vegan"></i>
                    <img src="gallery/<?php echo $row1['s_img']; ?>"  height="250px" width="300px" alt="">
                    <h4><a href="service.php"><?php echo $row1['s_name']; ?></a></h4>
                    <!-- <p>We provide best Plumber</p> -->
                    <a class="read-more-btn" href="service-details.php?sid=<?php echo $row1['sid']; ?>">Read More</a>
                </div>
                <?php }} ?>
                
            </div>
        </div>
    </div>
    <!-- End service Area -->
    <!-- our service -->
   <!-- <div class="container">
       <h3 align="center">OUR SERVICES</h3>
       <div class="row">
       <?php  
                                
                            //     $sql = "SELECT * from services ORDER BY s_name DESC LIMIT 4";
                            //    $result =  mysqli_query($conn , $sql);
   
                            //        if (mysqli_num_rows($result) > 0) {
                            //   while($row1 = mysqli_fetch_assoc($result)) {    
   
   
                                    ?>
           <div class="col-md-3">
               <div class="product-top">
                   <img src="gallery/<?php
                    // echo $row1['s_img'];
                     ?>" alt="">
                   <div class="overlay">
                       <button type="button" class="btn btn-secondary" title="Quick Shop">
                       <i class="fa fa-eye"></i>
                       </button>
                       <button type="button" class="btn btn-secondary" title="Add Wish List">
                       <i class="fa fa-shopping-cart"></i>
                       </button>
                   </div>
               </div>
               <div class="product-bottom text-center">
                   <h3><?php 
                //    echo $row1['s_name']; 
                   ?></h3>
                   <h5>200</h5>
               </div>
              
           </div>
           <?php
        //  }} 
         ?>
           <div class="more-btn col-md-12 text-center">
                <a href="service.php" class="btn btn-dark border btn-md">View All Services</a>
            </div> -->
           <!-- <div class="col-md-3">
               <div class="product-top">
                   <img src="gallery/plumbingwala.jpg" alt="">
                   <div class="overlay">
                       <button type="button" class="btn btn-secondary" title="Quick Shop">
                       <i class="fa fa-eye"></i>
                       </button>
                       <button type="button" class="btn btn-secondary" title="Add Wish List">
                       <i class="fa fa-shopping-cart"></i>
                       </button>
                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                       <i class="fa fa-eye"></i>
                       </button> -->
                   <!-- </div>
               </div>
               <div class="product-bottom text-center">
                   <h3>Carpenter</h3>
                   <h5>200</h5>
               </div>
           </div> --> 
           <!-- <div class="col-md-3">
               <div class="product-top">
                   <img src="gallery/plumbingwala.jpg" alt="">
                   <div class="overlay">
                       <button type="button" class="btn btn-secondary" title="Quick Shop">
                       <i class="fa fa-eye"></i>
                       </button>
                       <button type="button" class="btn btn-secondary" title="Add Wish List">
                       <i class="fa fa-shopping-cart"></i>
                       </button>
                   </div>
               </div>
               <div class="product-bottom text-center">
                   <h3>Carpenter</h3>
                   <h5>200</h5>
               </div>
           </div>
           <div class="col-md-3">
               <div class="product-top">
                   <img src="gallery/plumbingwala.jpg" alt="">
                   <div class="overlay">
                       <button type="button" class="btn btn-secondary" title="Quick Shop">
                       <i class="fa fa-eye"></i>
                       </button>
                       <button type="button" class="btn btn-secondary" title="Add Wish List">
                       <i class="fa fa-shopping-cart"></i>
                       </button>
                   </div>
               </div>
               <div class="product-bottom text-center">
                   <h3>Carpenter</h3>
                   <h5>200</h5>
               </div>
           </div> -->
       </div>
   </div>
                
    <!-- our service end -->
    
   <!-- Start Team Area -->
   
    <!-- End Team Area -->
    <!-- Start Testimonial Area -->
    <div class="testimonial ptb-50">
        <div class="container">
            <div class="row align-items-center">
            <?php 
													     
       												//   $sql4 = 'SELECT * from feedback where status=1';
        											//  $result4 =  mysqli_query($conn , $sql4);
    											    //  if (mysqli_num_rows($result4) > 0) {
          											// 		  while($row4 = mysqli_fetch_row($result4)) {    
															  
													// 		  $uid1=$row4['1'];
													// 		   $sql5 = "SELECT * from user where uid='$uid1'";
        											//  $result5 =  mysqli_query($conn,$sql5);
    											    //  if (mysqli_num_rows($result5)> 0) {
          											//  while($row5 = mysqli_fetch_row($result5))
													// 	 { 
															  
															  
													
									?>
                <div class="col-lg-5">
                    <div class="testimonial-text-area">
                        <div class="default-section-heading">
                            <h6>OUR CUSTOMER</h6>
                            <h3>What People Say About Us</h3>
                        </div>
                        <div class="testimonial-card-area owl-carousel">
                        <?php 
													     
       												  $sql4 = 'SELECT * from feedback where status=1';
        											 $result4 =  mysqli_query($conn , $sql4);
    											     if (mysqli_num_rows($result4) > 0) {
          													  while($row4 = mysqli_fetch_row($result4)) {    
															  
															  $uid1=$row4['1'];
															   $sql5 = "SELECT * from user where uid='$uid1'";
        											 $result5 =  mysqli_query($conn,$sql5);
    											     if (mysqli_num_rows($result5)> 0) {
          											 while($row5 = mysqli_fetch_row($result5))
														 { 
															  
															  
													
									?>
                            <div class="testimonial-card">
                            
                                <div class="stars">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><span>4.0</span></li>
                                    </ul>
                                </div>
                                <i class="flaticon-left-quote"></i>
                                <p><?php echo  $row4['3'];  ?></p>
                                <div class="testimonial-intro">
                                    <img src="gallery/<?php echo  $row5['6'];  ?>" alt="image">
                                    <div class="testimonial-intro-text">
                                        <h4><?php echo  $row5['1'];  ?></h4>
                                        <!-- <p>Civil Engineer</p> -->
                                    </div>
                                </div>
                                
                            </div>
                            <?php }} }} ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-img-area">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial/t-video.jpg" alt="image">
                            <!-- <div class="play-button">
                                <a class="video-popup" href="#"><i class="flaticon-play-button"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php ?>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->
     

    <!-- Start Why We Area -->
    <div class="why-we pb-100 bg-f9fbfe">
        <div class="why-we-content">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="why-we-img">
                            <img src="assets/images/about/a1.jpg" alt="image">
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="why-we-text-area">
                            <div class="default-section-heading">
                                <h6>WHY CHOOSE US</h6>
                                <h3>We Provide High Quality Work And Customer Service</h3>
                            </div>
                            <div class="why-we-card">
                                <i class="flaticon-circuit"></i>
                                <h4>Fast service</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed elite eiusmod incididunt magna dolore magna.</p> -->
                            </div>
                            <div class="why-we-card">
                                <i class="flaticon-plug"></i>
                                <h4>Affordable Price</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed elite eiusmod incididunt magna dolore magna.</p> -->
                            </div>
                            <div class="why-we-card">
                                <i class="flaticon-signal"></i>
                                <h4>Quality of Work</h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed elite eiusmod incididunt magna dolore magna.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why We Area -->

    <!-- Start Portfolio Area -->
    <section id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                  <h2>Meet Our Best Provider</h2>
                  <p></p>
                </div>
            </div>
            <div class="row">
                <?php 
                 $sql1 = "SELECT * from service_provider where status =1 order by pname limit 4";
                 $result1 =  mysqli_query($conn,$sql1);
                 if (mysqli_num_rows($result1)> 0) {
                   while($row2 = mysqli_fetch_assoc($result1)) {   
                    $sid=$row2['sid'];
                    
                    
                 $sql2 = "SELECT * from services where sid='$sid'";
                 $result2 =  mysqli_query($conn,$sql2);
                 if (mysqli_num_rows($result2)> 0) {
                   while($row3 = mysqli_fetch_row($result2))
                     { 
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="gallery/<?php echo  $row2['pimg'];  ?>" width="350px" height="400px" alt="">
                      </div>
                        <div class="member-info">
                            <h4><?php echo  $row2['pname'];  ?></h4>
                            <span></span>
                            <!-- <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <?php }} }} ?>
            </div>
            
        </div>
    </section>
   
    <!-- End Portfolio Area -->

    

  






<?php 
include('includes/footer.php');
include('includes/script.php');
?>