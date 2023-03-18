<?php
session_start(); 
include('includes/conn.php');


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM service_provider WHERE email='$email_login' AND pass='$password_login'";

    $query_run = mysqli_query($conn, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['pname'] =$email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email And Password Does Not Match';
        header('Location: login.php');
    }
}

//generating invoice
if(isset($_POST['generate']))

{
    $bid = $_POST['generate_id'];
    $mtcost = $_POST['mcost'];
    $sccost = $_POST['scost'];

    $query1 = "UPDATE booking set provider_status=4 , invoice=2 where bookingid='$bid'";
    $query_run1 = mysqli_query($conn, $query1);

    $query = "UPDATE invoice SET materialcost = '$mtcost', company=1, servicecharge='$sccost' where bookingid='$bid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success']= "Your Data Updated";
        header('Location: invoices.php');

    }
    else
    {
        $_SESSION['success']= "Your Data Updated";
        header('Location: invoices.php');
    }
}
?>