<?php

session_start();


unset($_SESSION['auth'] );
unset($_SESSION['auth_user']);
// unset($_SESSION['paddress']);
// unset($_SESSION['pname'] );
// unset($_SESSION['image1']);
// unset($_SESSION['pcity']);
// unset($_SESSION['pphone']); 
// unset($_SESSION['sid1']); 
// unset($_SESSION['user']); 
header("location: ../index.php")

?>