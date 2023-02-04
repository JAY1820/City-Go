
<?php
        
		include("conn.php");
		
?>
<?php
	  if(isset($_POST['save']))
	{
						
					$uname=$_POST['username'];
                    $pname = strtoupper( $_POST['pname']);
                    $sid = $_POST['sid'];
					$gender = $_POST['gender'];
					$status = 0;
					$pass = $_POST['pass'];
					$pass2 = $_POST['pass2'];
					$dob = $_POST['dob'];
					$email = $_POST['email'];
					$city = $_POST['city'];
					$phone = $_POST['phone'];
					$desc = $_POST['desc'];
					$add = $_POST['address'];
					$exp = $_POST['exp'];
					// $file_name = basename($_FILES["img"]["name"]);
                    $file_name = $_FILES["img"]["name"];
   
   
       
						
		$sql_u = "SELECT * FROM service_provider WHERE username='$uname'";
		$res_u = mysqli_query($conn,$sql_u);
		
		
		if(mysqli_num_rows($res_u)> 0) {
  	  	$name_error = "Sorry... username already taken"; 	
  	}else if($pass!=$pass2){
	
	
		$name_error1 = "Sorry...password is not same"; 
	
	
	}
	else {
					
    
             // "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
          $query = "INSERT INTO service_provider( username,sid,pname,address,city,dob,gender,email,contact,pass,pimg,status,short_bio,experience) VALUES 
											('$uname','$sid','$pname','$add','$city','$dob','$gender','$email','$phone','$pass','$file_name','$status','$desc','$exp year')";
	
             $result = mysqli_query($conn,$query);
             move_uploaded_file($_FILES["img"]['tmp_name'], "gallery/".$_FILES["img"]["name"]);
			   ?>
		                    <script>
			                        alert('registered succesfully!');
			                        window.location.href='partner/login.php';
		                    </script>
		
		                <?php
		
       		exit;
            }}




?>


<?php 
include('includes/header.php');
?>

<div class="account pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12 col-12">
                    <div class="form-area reg-area">
                        <h3>Register As Provider</h3>
                        <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input name="pname" type="text" class="form-control" placeholder="Name*"  required="" >
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username"  class ="form-control" required>
                        </div>
                            <input type="password" name="pass" id="confirm-password" tabindex="2" class="form-control" placeholder="Password" required>
                        <div class="form-group">    
                            <input type="password" name="pass2" placeholder="Confirm Password! "  class ="form-control" required>
                        </div>  <br/> 
                            <div class="form-group ">
                                <select class="form-control "name="sid" required>
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
                                <input type="text" name="phone"  tabindex="2" class="form-control" placeholder="Phone" required>
                            </div>
                            <br/>
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
                            
                                <input class="form-control" type="text" name="exp" required placeholder="Your Exprience of Work" required>
                            </div> <br/>
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
                            </div> <br/>
                                
                            <div class="form-group">
                                <textarea class="form-control" rows="3" cols="30" name="desc"id="long_desc" placeholder="Your Short Bio Status 25 word minimum" required pattern="[a-z A-Z 0-9]"></textarea>
                            </div>
                                
                                
                                
                                
                            <button  name="save" class="submit-btn">Register Now</button>
                            <p>Already Have An Account? <a href="login.html">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
include('includes/footer.php');
include('includes/script.php');
?>