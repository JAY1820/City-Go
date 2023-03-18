<?php

session_start();


unset($_SESSION['pid'] );
unset($_SESSION['pemail']);
unset($_SESSION['paddress']);
unset($_SESSION['pname'] );
unset($_SESSION['image1']);
unset($_SESSION['pcity']);
unset($_SESSION['pphone']); 
unset($_SESSION['sid1']); 
unset($_SESSION['user']); 
header("location: ../index.php")

?>