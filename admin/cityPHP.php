<?php 
session_start();
include('includes/conn.php');
 $ssid=$_POST['categories'];
 
$query=mysqli_query($conn,"SELECT * FROM service_detail WHERE sid='$ssid'");

$data = "<option>Select Sub service</option>";
$options = "";
while ($row=mysqli_fetch_array($query)) {
     $options .= " <option value='" .$row['ssid']."'>". $row['c_name'] ."</option>";
	 $_SESSION['sbid']=$row['sbid'];
}
echo $data.$options;
 ?>