<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "homeservice_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error)
{
   die("database is not connected");
}
// else{
//     echo ("connection is  created");
// }

?>