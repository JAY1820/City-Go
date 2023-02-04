<?php 
session_start();
include('conn.php');

if(isset($_POST['registerbtn']))
{
    $uname = strtoupper($_POST['uname']);
    $pass = $_POST['upass'];
    $pass2 = $_POST['upass2'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];
    $uadd = $_POST['address'];
    $file_name1 = $_FILES['uimg']['name'];

    $sql_u = "SELECT * FROM user WHERE email='$uemail'";
    $res_u = mysqli_query($conn,$sql_u);

    if($pass === $pass2)
    {
        $query = "INSERT INTO user(name,email,pass,p_no,address,img) VALUES('$uname','$uemail','$pass','$uphone','$uadd','$file_name1')";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            move_uploaded_file($_FILES["uimg"]['tmp_name'], "gallery/".$_FILES["uimg"]["name"]);
            $_SESSION['success'] = "";
            header('Loaction: login.php');
        }
        else
        {
            $_SESSION['status'] = "";
            header('Loaction: login.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Password does not match with each other";
        header('Loaction: login.php');
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
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control" placeholder="Your Name"  required >
                            </div> <br>
                            <div class="form-group ">
                                <textarea   placeholder="Enter Your Address where service provided" name="address" class="form-control" id="result" required ></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="uphone" class="form-control" placeholder="Mobile"  required >
                            </div>
                            <div class="form-group">
                                <?php if (isset($name_error)): ?>  <?php endif ?> 
                                <input type="email" name="uemail" placeholder="enter email"  class ="form-control" required>
                                <?php if (isset($name_error)): ?>
                                <span><?php echo $name_error; ?></span>
                                <?php endif ?>
               
                           </div>

                           <div class="form-group">
                               <input type="password" name="upass" class="form-control" placeholder="Password" maxlength="12" minlength="5"  required>
                           </div>
                           <div class="form-group">
                               <div <?php if (isset($name_error1)): ?> class="form_error" <?php endif ?> >
                               <input type="password" name="upass2" class="form-control" placeholder="Retype Password"  maxlength="12" minlength="5" required>
                               <?php if (isset($name_error1)): ?>
                               <span><?php echo $name_error1; ?></span>
                               <?php endif ?>
                               </div>
                           </div>
                           <br>
                           <div class="form-group">
                               <label>Profile Picture</label>
                                   <input type="file" name="uimg" class="form-control" placeholder="Select Profile pic" required>
                               </div>
                               
                               
                                
                                
                                
                            
                           
                            <button  name="registerbtn" class="submit-btn">Register Now</button>
                            <p>Already Have An Account? <a href="login.php">Login</a></p>
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