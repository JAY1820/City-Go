<?php 
session_start();
include('includes/conn.php');

if(isset($_POST['login']))
{
    {
        $userid =  $_POST['username'];
        $password = $_POST['pass'];
        $log = "SELECT * FROM  service_provider WHERE username = '$userid' and pass ='$password'";

        $log1 = mysqli_query($conn,$log);
        $log2 = mysqli_fetch_object($log1);
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
			      window.location.href='index.php';
		     </script>
            <?php

								exit; 
                    }else{
            ?>
            <script>
			      alert('UserName or Password Not  Match try again!');
			        window.location.href='login.php';
		   </script>     
        <?php        
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SP</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">LOGIN PROVIDER</h3></div>
                                    <div class="card-body">




                                        <form class="user" method="POST">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="username" id="username" placeholder="Username" />
                                                
                                            </div> <br>
                                            <div class="form-group">
                                                <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                                
                                            </div>
                                            <br>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button type="submit" name="login" class="btn btn-primary" >Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../providerreg.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
