<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!--color switcher css-->
    <link rel="stylesheet" href="css/switcher/skin-aqua.css" media="screen" id="style-colors" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    // Set up global variable
    var result;
    
    function showPosition() {
        // Store the element where the page displays the result
        result = document.getElementById("result");
        
        // If geolocation is available, try to get the visitor's position
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            result.innerHTML = "Getting the position information...";
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    };
    
    // Define callback function for successful attempt
    function successCallback(position) {
       // result.innerHTML = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";	
		
		var locAPI = "https://us1.locationiq.com/v1/reverse.php?key=1821333b8a56f9&lat="+position.coords.latitude+"&lon="+position.coords.longitude+"&format=json";
		
		$.get({
			url:locAPI,
			success:function(data){
				console.log(data);
				document.getElementById("result").value = data.display_name;
			}
		});
		
    }
    
    // Define callback function for failed attempt
    function errorCallback(error) {
        if(error.code == 1) {
            result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
        } else if(error.code == 2) {
            result.innerHTML = "The network is down or the positioning service can't be reached.";
        } else if(error.code == 3) {
            result.innerHTML = "The attempt timed out before it could get the location data.";
        } else {
            result.innerHTML = "Geolocation failed due to unknown error.";
        }
    }
	
</script>
    <!-- Document Title -->
    <title>service Providers</title>
</head>

<body style="background-image: url(images/header/hero-5.jpg)" >
    <!--Page Wrapper starts-->
    <div class="page-wrapper" >
        <!--header starts-->
  
        <!--Header ends-->
        <!--User Login section starts-->
        <div class="user-login-section section-padding bg-fixed"  >
            <div class="container">
                <div class="row" >
                    <div class="col-md-10 offset-md-1  text-center">
                        <div class="login-wrapper">
                            <ul class="ui-list nav nav-tabs justify-content-center mar-bot-30" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                                </li>
								
                            </ul>
                            <div class="ui-dash tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    <form id="login-form"  method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="username"  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="row mar-top-20">
                                            
                                            <div class="col-md-12 col-12 text-right">
                                                <div class="res-box sm-left">
                                                    <a href="index 1.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="res-box text-center mar-top-30">
                                            <button type="submit" class="btn v3" name="login"><i class="ion-log-in"></i> Log In</button>
                                        </div>
                                    </form>
                                   
                                </div>
                                <div class="tab-pane fade" id="register" role="tabpanel">
                                    <form id="register-form"  method="post" enctype="multipart/form-data">
									 <div class="form-group">
                                          
                                        <input name="pname" type="text" class="form-control" placeholder="Name*"  required >
                                        </div>
                                        <div class="form-group">
                                            <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
										  <input type="text" name="username" placeholder="Username"  class ="form-control" required>
										  <?php if (isset($name_error)): ?>
											<span><?php echo $name_error; ?></span>
										  <?php endif ?>
										</div>
                                        </div>
										<div class="form-group">
                                            <input type="password" name="pass" id="confirm-password" tabindex="2" class="form-control" placeholder="Password" required>
                                        </div><div class="form-group">
                                             <div <?php if (isset($name_error1)): ?> class="form_error" <?php endif ?> >
										<input type="password" name="pass2" placeholder="Confirm Password! "  class ="form-control" required>
										<?php if (isset($name_error1)): ?>
										<span><?php echo $name_error1; ?></span>
										<?php endif ?>
										</div>
                                        </div>
                                        <div class="form-group ">
                                            <select class="form-control"name="sid" required>
											<option>Choose your category service</option>
											<?php
													
       												  $sql2 = "SELECT * from services  ";
        											 $result2 =  mysqli_query($conn,$sql2);
    											     if (mysqli_num_rows($result2)> 0) {
          											 while($row2 = mysqli_fetch_assoc($result2)) { $sid1=$row2['sid']; ?>
												
													<option value="	<?php echo $row2['sid'];?>">  
													<?php echo $row2['s_name'];
		
												?></option>
													<?php }}?>
												</select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="email" name="email"  tabindex="2" class="form-control" placeholder="email" required>
                                        </div>
										<div class="form-group">
                                            <input type="number" name="phone"  tabindex="2" class="form-control" placeholder="your contact Number" pattern="[0-9]{10}">
                                        </div>
										<div class="form-group">
										<label >Date Of Birth</label>
                                            <input type="date" name="dob"  tabindex="2" class="form-control" placeholder="Date of Birth" Format="DD-MM-YYYY">
                                        </div>
										<div class="form-group">
											<span>Gender:</span>
                                            <input type="radio" name="gender"  tabindex="2"  value="male"> male
											<input type="radio" name="gender"  tabindex="2"  value="female"> female
                                        </div>
										<div class="form-group">
										
                                            <input class="form-control" type="number" name="exp" required placeholder="Your Exprience of Work" required>
                                        </div>
										<div class="form-group">
                                            <select class="form-control select" name="city" required>
												<option>select city</option>
														<?php
												
       												  $sql3 = "SELECT * from city_mst where status=1 ";
        											 $result3 =  mysqli_query($conn,$sql3);
    											     if (mysqli_num_rows($result3)> 0) {
          											 while($row3 = mysqli_fetch_assoc($result3)) { ?>
												
													<option value="<?php echo $row3['city_name'];?>">  
													<?php echo $row3['city_name'];
		
												?></option>
													<?php }}?>
												</select>
                                        </div>
										<div class="form-group">
										<label>Profile Photos</label>
                                           <input type="file" name="img" >
																			</div>
																			<div class="form-group ui icon big input">
												<input type="text"  placeholder="Enter Your Address" name="address" class="form-control" id="result" />
												<i  aria-hidden="true" class="dot circle outline link icon form-control" onclick="showPosition();"></i>
											</div>
										<div class="form-group">
                                            <textarea class="form-control" rows="3" cols="30" name="desc"id="long_desc" placeholder="Your Short Bio Status 25 word minimum" required pattern="[a-z A-Z 0-9]"></textarea>
											</div>
                                        <div class="res-box text-left">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember" required>
                                            <label for="remember">I've read and accept <a href="Payment and policy Related Terms.pdf" target="_blank" >terms &amp; conditions</a></label>
                                        </div>
                                        <div class="res-box text-center mar-top-30">
                                            <button type="submit" class="btn v3" name="save"><i class="ion-android-checkmark-circle" ></i>Sign Up</button>
                                        </div>
                                    </form>
                                    
                                </div>
								
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--User login section ends-->
        <!--Login section ends-->
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="ion-arrow-up-c"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->
    <!--Footer Starts-->

    <!--Footer ends-->
  
    <!--Color switcher ends-->
    <!--Scripts starts-->
    <!--plugin js-->
    <script src="js/plugin.js"></script>
    <!--google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <!--Main js-->
    <script src="js/main.js"></script>
    <!--Scripts ends-->
</body>


<!-- Mirrored from demo.lion-coders.com/html/listagram/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 07:41:33 GMT -->
</html>