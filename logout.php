<?php

session_start();


unset($_SESSION['uid'] );
unset($_SESSION['email']);
unset($_SESSION['address']);
unset($_SESSION['name'] );
unset($_SESSION['image']);
unset($_SESSION['uphone']); 

unset($_SESSION['user']); 
header("location:index.php")

?>