<?php 
session_start();
include('conn.php');
include('includes/header.php');
?>
<?php

$id=$_SESSION['service'];

$query = "select * from services where sid='$id'";
$sname = mysqli_query($conn, $query);
$query = "select * from service_detail where sid='$id'";
$services = mysqli_query($conn, $query);

?>
<div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>Booking</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Booking</li>
                    <li>Booking</li>
                    <li>Booking</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="reg-area default-padding-top" align="center">
        <div class="container">
            <div class="row">
			<div class="col-md-10 col-md-offset-1">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom">
                        <div class="site-heading text-left"> <br>
                            <h2>Book your service </h2>
                        </div>
                        <form action="add_to_cart.php" method="post" name="cart">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <select name="categories" id="categories" class="form-control" required="">
                            <option >Select Service</option>
                                <?php 
                                        while ($row =  mysqli_fetch_assoc($services)) {
                                            echo "<option value=$row[ssid]>$row[c_name]</option>";
												 $_SESSION['c_name']=$row['c_name'];
                                        }
                                ?>
                            </select>
                                    </div> <br>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                    <select name="subservice" id="subservice" class="form-control" required="required">
                                                
                                                <option  value=""></option>
                               
                                    </select>
                                    </div> <br>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                    <select class="form-control" required="required" name="bqty">
                                        <option > Select No. of Appliences</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
						
						            </select>
                                    </div> <br>
                                </div>
								
                                <div class="col-md-6">
                                <input type="submit" class=" form-control btn btn-warning"  name="add_cart"  Value="ADD TO CART">
                                </div>
								<div class="col-md-6">
                                <a href="view_cart.php">   <input type="button" class="form-control btn btn-warning" Value="View Cart"></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
 
 
$("#categories").on('change',function(){  
var categories=$(this).val();
$.ajax({  
  type: 'POST',  
  url: 'cityPHP.php', 
  data: {categories:categories},
  success: function(response) {
    $("#subservice").html(response);
  }
});
})

});

</script>

<?php 
include('includes/footer.php');
include('includes/script.php');
?>