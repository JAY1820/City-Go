<?php 
include('includes/header.php');
include('conn.php');
?>

  <!-- Start Banner Area -->
  <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Contact Area -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="default-section-heading default-section-heading-middle">
                <h6>Send Message</h6>
                <h3>We Are Here To Help You</h3>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="contact-card">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Our Location</h4>
                                    <p>Vapi, Gujrat, India</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                <div class="contact-card">
                                    <i class="fas fa-envelope"></i>
                                    <h4>Email</h4>
                                    <p><a href="mailto:homeservice@gmail.com">homeservice@gmail.com</a></p>
                                    <p><a href="mailto:homeservice@gmail.com.com">homeservice@gmail.com.com</a></p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                <div class="contact-card">
                                    <i class="fas fa-phone-alt"></i>
                                    <h4>Phone</h4>
                                    <p><a href="tel:9988776655">9988776655</a></p>
                                    <p><a href="tel:9988776655">9988776655</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-area">
                            <form class="contact__form" method="post" action="">
                                <?php
                                if(isset($_POST['submit']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $pno = $_POST['phone'];
                                    $msg = $_POST['message'];

                                    $query = "INSERT INTO contact(name, email, phone, message) VALUES('$name', '$email', '$pno', '$msg')";
                                    $query_run = mysqli_query($conn, $query)
                                    ?>
                                     <script>
                     alert('Your Message has been send, We will contact you through call or mail! ');
                     window.location.href='contact.php';
             </script>
             <?php
                                    
                                } 
                                    
                                ?>
                                    
                                <!-- form message -->
                                <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end message -->
                                <!-- form element -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input name="name" type="text" class="form-control" placeholder="Name*" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input name="email" type="email" class="form-control" placeholder="Email*" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input name="phone" type="text" class="form-control" placeholder="Phone*" required="">
                                    </div>
                                    <!-- <div class="col-md-6 col-sm-6 col-12">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject*" required="">
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <textarea name="message" rows="5" class="form-control" placeholder="Message*" required=""></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <input name="submit" type="submit" class="default-button default-button-2 btn-success" value="Send Message">
                                    </div>
                                </div>
                                
                                <!-- end form element -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->


    <!-- Start Google Map Area -->
    <div class="google-map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563266.1918335108!2d-75.84536893896656!3d40.06973977396647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew%20Jersey%2C%20USA!5e0!3m2!1sen!2sjo!4v1614038980188!5m2!1sen!2sjo" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119681.73919353046!2d72.84386104298052!3d20.38064884709524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2c01246603%3A0xca6d49eb7baace15!2sVapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1648965547234!5m2!1sen!2sin"  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <!-- </iframe> -->
    </div>

<?php 
include('includes/footer.php');
include('includes/script.php');
?>