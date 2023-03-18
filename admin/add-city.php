<?php
session_start();
include('includes/conn.php');

?>
<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add City
                    <!-- <a href="add-city.php" class="btn btn-primary float-end">Add city</a> -->
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_POST['save']))
                        {
                            // $id = $row['city_id'];
                            $city = strtoupper($_POST['cname']);
                            $state = strtoupper($_POST['sname']);
                            $status = 0;
                            $query = "INSERT INTO city_mst(city_name, city_state, status) VALUES('$city', '$state', '$status')";
                            $query_run = mysqli_query($conn, $query)
                            
                            ?>
                            <script>
			                        alert('city succesfully!');
			                        window.location.href='add-city.php';
		                    </script>
                            <?php 
                            
                        }
                    ?>
                    <form  method="POST" >
                            <input  name='addservice' type='hidden'/>
                                <div class="form-group">
                                    <label>City Name</label>
                                    <input class="form-control" type="text" name="cname">
                                </div>
                                </br>
                                <div class="form-group">
                                    <label>State Name</label>
                                    <input class="form-control" type="text" name="sname">
                                </div>
    
                                
                                
                               
                                
                                
                        
                                         
                                
                                
                        </br>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-success" type="submit" id="submit" name="save">Add City</button>
                                </div>
                            </form>
                    

                </div>
            </div>
        </div>
     </div>
<div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>