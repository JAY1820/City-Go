
<?php 

session_start();
include('conn.php');

if(isset($_POST['registerbtn']))
{
    
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
    $usercpassword = $_POST['usercpassword'];
    
    if($userpassword === $usercpassword)
    {
        $query = "INSERT INTO userlogin(uname,uemail, upassword, ucpassword) VALUES('$username', '$useremail', '$userpassword', '$usercpassword')";
        $query_run = mysqli_query($conn, $query);
        
        if($query_run)
        {
            $_SESSION['success'] = "";
            header('Loaction: index.php');
        }
        else
        {
            $_SESSION['status'] = "";
            header('Loaction: index.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Password does not match with each other";
        header('Loaction: index.php');
    }

   
}

?>
<?php 
include('includes/header.php');
?>

<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Register</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Register</li>
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
                    <div class="form-area reg-area">
                        <h3>Create An Account</h3>
                        <form action="" method="POST">
                            <input type="text" name="username" class="form-control" placeholder="Name" required="">
                            <input type="email" name="useremail" class="form-control" placeholder="Email" required="">
                            <input type="password" name="userpassword" class="form-control" placeholder="Password" required="">
                            <input type="password" name="usercpassword" class="form-control" placeholder="Confirm Password" required="">
                            <button  name="registerbtn" class="submit-btn">Register Now</button>
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