<?php 
session_start();
include('conn.php');

include('includes/header.php');




?>
 <?php if(isset($_SESSION['uid'])) 
    {
    ?>
<?php include("vendor/head1ajax.php");?>

    <?php


$query = "SELECT * FROM city_mst WHERE status=1";
$city  = mysqli_query($conn,$query);

$query = "SELECT * FROM services";
$services = mysqli_query($conn, $query);

?>
<link href="vendor/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  
          <!-- DATE-PICKER -->
                   <link href="vendor/datepicker3.css" rel="stylesheet" id="bootstrap-css">
                   <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Our Services</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </div>




<div class="reg-area default-padding-top" align="center">
        
        <div class="container">
            <div class="row">
			<div class="col-md-16 col-md-offset-2">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom"> <br>
                        <div class="site-heading text-left">
                            <h2>Make Booking Appointment</h2>
                        </div>
                        <form action="booking2.php" method="post" align="center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="city">
                                            <option>Select City</option>
							                <?php 
							 
                                             while ($row =  mysqli_fetch_assoc($city)) {
                                            echo "<option value=$row[city_name]>$row[city_name]</option>";
                                         }
									
                                             ?>
                                                </select>
                                    </div>
                                    <br/>

                                    
                                </div>
                                <br/><br/>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="service">
                                            <option>Select Category</option>
                                         
                                            <?php 
                                        while ($row =  mysqli_fetch_assoc($services)) {
											$_SESSION['v_price']=$row[visiting_price]; 
                                            echo "<option value=$row[sid]>$row[s_name]</option>";
                                        }
                                ?>
                                        </select>
                                        <br/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control"  id="today"  type="date" name="bdate">
                                    </div> <br/>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="btime">
                                            <option>Select Time</option>
                                                         <option value="08.00am - 09.00am"> 08.00am - 09.00am</option>
						                                <option value="09.00am - 10.00am">09.00am - 10.00am</option>
						                                <option value="10.00am - 11.00am" selected> 10.00am - 11.00am</option>
                                                        <option value="11.00am - 12.00pm"> 11.00am - 12.00pm</option>
                                                        <option value="12.00pm - 01.00pm"> 12.00pm - 01.00pm</option>
                                                        <option value="01.00pm - 02.00pm"> 01.00pm - 02.00pm</option>
                                                        <option value="02.00pm - 03.00pm"> 02.00pm - 03.00pm</option>
                                                        <option value="03.00pm - 04.00pm"> 03.00pm - 04.00pm</option>
                                                        <option value="04.00pm - 05.00pm"> 04.00pm - 05.00pm</option>
                                                        <option value="05.00pm - 06.00pm"> 05.00pm - 06.00pm</option>
                                                        <option value="06.00pm - 07.00pm"> 06.00pm - 07.00pm</option>
                                                        <option value="07.00pm - 08.00pm"> 07.00pm - 08.00pm</option>
                                        </select>
                                    </div> <br/>
                                </div> 
								
                                <div class="col-md-5">
                                    <input type="submit" class="form-control btn btn-warning" name="step1" Value="continue">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>
    <script type="text/javascript">
var field = document.querySelector('#today');
var date = new Date();

// Set the date
field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) + 
    '-' + date.getDate().toString().padStart(2, 0);

</script>
<?php }else{
        ?>
 <script>
                                                    alert('Login First !');
                                                    window.location.href='login.php';
                                            </script>

        <?php
    }  ?>
<?php 
include('includes/footer.php');
include('includes/script.php');
?>