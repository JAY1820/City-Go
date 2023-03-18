<?php 
include('includes/header.php');
?>

<!-- Start Banner Area -->
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Login / Register</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Login / Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Account Area -->
    <div class="account pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-area">
                        <h3>Log In To Your Account</h3>
                        <form>
                            <input type="email" class="form-control" placeholder="Email" required="">
                            <input type="password" class="form-control" placeholder="password" required="">
                            <div class="acc-login-footer">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <button class="submit-btn">Log In</button>
                        </form>
                        <h6>Or</h6>
                        <button class="submit-btn fb-btn">Login With Facebook</button>
                        <button class="submit-btn google-btn">Login With Google</button>
                        <p>Don't Have An Account? <a href="register.html">Create</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-area reg-area">
                        <h3>Create An Account</h3>
                        <form>
                            <input type="text" class="form-control" placeholder="Name" required="">
                            <input type="email" class="form-control" placeholder="Email" required="">
                            <input type="password" class="form-control" placeholder="Password" required="">
                            <input type="password" class="form-control" placeholder="Repeat Password" required="">
                            <button class="submit-btn">Register Now</button>
                            <p>Already Have An Account? <a href="login.html">Login</a></p>
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