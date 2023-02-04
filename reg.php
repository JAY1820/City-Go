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
            // move_uploaded_file($_FILES["uimg"]['tmp_name'], "gallery/".$_FILES["uimg"]["name"]);
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