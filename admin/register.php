<?php 
session_start();
include('includes/conn.php');

if(isset($_POST['save'])){

                    $uname=$_POST['username'];
                   $pname = strtoupper( $_REQUEST['pname']);
                    
					
					$pass = $_POST['pass'];
					$pass2 = $_POST['pass2'];
				
					$email = $_POST['email'];
					$city = $_POST['city'];
					$phone = $_POST['phone'];
                    $file_name1 = $_FILES['img']['name'];

                    $sql_u = "SELECT * FROM login_admin WHERE email='$email'";
                    $res_u = mysqli_query($conn,$sql_u);

                    if($pass === $pass2){
                        $query = "INSERT INTO login_admin(userid, name, password, email, city, phone, img) VALUES('$uname', '$pname', '$pass', '$email', '$city', '$phone', '$file_name1')";
                        $query_run = mysqli_query($conn, $query);

                        if($query_run){
                            move_uploaded_file($_FILES["img"]['tmp_name'], "../gallery/".$_FILES["img"]["name"]);
                            $_SESSION['success'] = "";
                            header('Loaction: index.php');
                        } else{
                            $_SESSION['status'] = "";
                            header('Loaction: index.php');
                        }
                    }
                    else{
                        $_SESSION['status'] = "Password does not match with each other";
                        header('Loaction: index.php');
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
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <!-- <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your Name" />
                                                        <label for="inputFirstName">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Username" />
                                                        <label for="inputLastName">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your City" />
                                                        <label for="inputFirstName">City</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Contact Number" />
                                                        <label for="inputLastName">Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                            </div>
                                        </form> -->
                                        <form name="patner" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label> Name <span class="text-danger">*</span></label>
                                        <input name="pname" type="text" class="form-control" required >
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Userid <span class="text-danger">*</span></label>
                                        <div  class="form_error"  >
										  <input type="text" name="username" placeholder="Username"  class ="form-control" required>
										  
											<span></span>
										  
										</div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" required>
                                    </div>
									
                                </div>
								<div class="col-xl-12">
												
                                <label>City <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="city" required>
												
												
											</div>
								
								
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="pass" required>
                                    </div>
                                </div>
                                      <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <div  class="form_error"  >
										<input type="password" name="pass2" placeholder="Enter password again! " required class ="form-control">
										
										<span></span>
										
										</div>
                                    </div>
                                </div>
								
								
										
										
										
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" name="phone"type="text" required>
                                    </div>
                                </div>
								
                                <div class="col-sm-12">
									<div class="form-group">
										<label>Profile pic</label>
										<div class="profile-upload">
											
											<div class="upload-input">
												<input type="file" name="img" class="form-control" required>
											</div>
										</div>
										
									</div>
                                </div>
                            </div>
							
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="save" >Save </button>
                            </div>
                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
