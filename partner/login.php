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
<html>
<head>
    <title>Provider Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Partner Login Here</h1>
            <form class="user" method="POST">
            <p>Username</p>
            <!-- <input type="text" name="username" placeholder="Enter Username"> -->
            <input class="form-control" type="text" name="username" id="username" placeholder="Username" />
            <p>Password</p>
            <!-- <input type="password" name="password" placeholder="Enter Password"> -->
            <input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
            <a href="../providerreg.php">Need An Account, Sign up now</a>    
            </form>
        
        
        </div>
    
    </body>
</html>