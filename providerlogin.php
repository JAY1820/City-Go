<?php 
session_start();
include('conn.php');

if(isset($_POST['login']))
{
    {
        $userid =  $_POST['username'];
        $password = $_POST['pass'];
        $log = "SELECT * FROM  service_provider WHERE username = '$userid' and pass ='$password'";

        $log = mysqli_query($conn,$log);
        $log2 = mysqli_fetch_object($log);
        if($log2)
        {
            $_SESSION['pid'] = $log2->pid;
            $_SESSION['sid1'] = $log2->sid;
            $_SESSION['pemail'] = $log2->email;
            $_SESSION['paddress'] = $log2->address;
            $_SESSION['pcity'] = $log2->city;
            $_SESSION['pname'] = $log2->pname;
            $_SESSION['image1'] = $log2->pimg;
            $_SESSION['pphone'] = $log2->contact;
       
            $_SESSION['user'] = true;
            ?>
             <script>
			      alert('Login Succesfully');
			      window.location.href='partner/index.php';
		     </script>
            <?php

								exit; 
                    }else{
            ?>
            <script>
			      alert('UserName or Password Not  Match try again!');
			        window.location.href='providerlogin.php';
		   </script>     
        <?php        
        }
    }
}

?>
<?php 
include('includes/header.php');

?>

    <!-- Start Account Area -->
    <div class="account pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12 col-12">
                    <div class="form-area">
                        <h3>Log In Provider</h3>
                        <form method="POST"> 
                        <div class="form-group">
                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username"  required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                        </div>
                            
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