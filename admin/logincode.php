<?php 
session_start();
include('includes/conn.php');

if(isset($_POST['login_btn']))
{
   $email = $_POST['email'];
   $password = $_POST['pass'];

   $log_query = "SELECT * FROM login_admin WHERE email='$email' AND password='$password'";
   $log_query_run = mysqli_query($conn, $log_query);

   if(mysqli_num_rows($log_query_run) > 0)
   {
        foreach($log_query_run as $row){
            $user_id = $row['id'];
            $user_userid = $row['userid'];
            $user_name = $row['name'];
            $user_email = $row['email'];
            $user_phone = $row['phone'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_userid'=>$user_userid,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_phone'=>$user_phone,

        ];
        ?>
            <script>
			      alert('Logged in  Successfully');
			      window.location.href='index.php';
		     </script>
        
        <?php
   }
   else
   { ?> 
        <script>
			      alert('Access Denied');
			      window.location.href='login.php';
		     </script><?php 
    
   }
}
else{ ?>

                <script>
			      alert('Invalid Input');
			      window.location.href='login.php';
		     </script>
             <?php 
    
}

?>