<?php 
session_start();
include('conn.php');
 $ssid=$_POST['categories'];
 
$query=mysqli_query($conn,"select * from sub_service where ssid='$ssid'");

$data = "<option>Select Sub service</option>";
$options = "";
while ($row=mysqli_fetch_array($query)) {
     $options .= " <option value='" .$row['sub_name']."'>". $row['sub_name'] ."</option>";
	 $_SESSION['sbid']=$row['sbid'];
}
echo $data.$options;
 ?>