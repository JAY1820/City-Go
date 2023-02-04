<?php 
session_start();
 $_SESSION['pid']=$_REQUEST['pid'];
 if(isset($_SESSION['pid'])){
 header("location:booking3.php");
 }
 else{
	 
	  header("location:booking2.php");
 }
?>