<?php  
session_start();
include('conn.php');
if(isset($_REQUEST['login']))
	 {
		 {
                    $userid =  $_REQUEST['username'];
                    $password = $_REQUEST['pass'];
                    $log = "select * from  user where email = '$userid' and pass ='$password'";
                    $log1 = mysqli_query($conn,$log);
                    $log2 = mysqli_fetch_object($log1);
                    if($log2){
                    
					
							 $_SESSION['uid'] = $log2->uid;
                        $_SESSION['email'] = $log2->email;
                        $_SESSION['address'] = $log2->address;
                        $_SESSION['name'] = $log2->name;
						$_SESSION['image'] = $log2->img;
						$_SESSION['uphone'] = $log2->p_no;
						
                        $_SESSION['user'] = true;
                        
						//print_r($_SESSION);
                       ?>
                        <script>
			                        alert('Login Succesfully');
			                        window.location.href='index.php';
		                    </script>
                       <?php
								exit; 
                    }else{
                        ?>
		                    <script>
			                        alert('UserName or Password Not  Match try again!');
			                        window.location.href='index.php';
		                    </script>
		
		                <?php
                    }

                 }
     }
     ?> 
<?php 
include('includes/header.php');
?>

<!-- Start Banner Area -->
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Login</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->



    <!-- Start Account Area -->
    <div class="account pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12 col-12">
                    <div class="form-area">
                        <h3>Log In To Your Account</h3>
                        <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email*" name="username" type="email"required>
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Password*"  name="pass"type="password" required>
                        </div>
                            <!-- <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            <input type="password" class="form-control" placeholder="Password" name="pass" required=""> -->
                            <div class="acc-login-footer">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Keep me logged in</label>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <button class="submit-btn" name="login">Log In</button>
                        </form>
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Area -->

<?php 
include('includes/footer.php');
include('includes/script.php');
?>