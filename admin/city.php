<?php include_once('includes/conn.php');
    
 
 {
	//insert gallery
    $msg="";
    $error="";
if(isset($_REQUEST['insert']))
{
	

$id=$_REQUEST['city'];
 $query2 = "UPDATE city_mst SET
		status='1'
		 WHERE city_id='$id'";
	
             $result3 = mysqli_query($conn,$query2);
			
		
}
?>

?>
<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>City
					<a href="add-city.php" class="btn btn-primary float-end">Add city</a>
                    </h4>
                    <?php echo $error;?>
									<?php echo $msg;?>
                </div>
                <div class="card-body">

                <form method="post" id="insert product" enctype="multipart/form-data">
								<div class="card-body">
										<div class="row">
											<div class="col-xl-6">
												<h4 class="card-title">Select City</h4>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Select City</label>
													<div class="col-lg-9">
														<select class="form-control select" name="city" >
												<option>select city</option>
												<?php
												
       												  $sql5 = "SELECT * FROM city_mst  WHERE status=0 ";
        											 $result5 =  mysqli_query($conn,$sql5);
    											     if (mysqli_num_rows($result5)> 0) {
          											 while($row5 = mysqli_fetch_assoc($result5)) {
																
												?>
												
												
												<option value="<?php echo $row5['city_id'];?>" >
												<?php echo $row5['city_name'];?>
												</option>
															 
														<?php  }} ?>
												</select>
													</div>
												</div>
												
												
												
											</div>
											
										</div>
                                        <br/>
										<div class="text-left">
											<input type="submit" class="btn btn-primary"  value="Activate" name="insert" style="margin-left:200px;">
										</div>
										<div class="table-responsive">
									<table class="table table-stripped" id="myTable"> 
                                    <thead class="">
                                        <tr >
                                            <th>name</th>
                                         
											 <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
													      
       												  $sql = 'SELECT * FROM city_mst WHERE status=1';
        											 $result =  mysqli_query($conn , $sql);
    											     if (mysqli_num_rows($result) > 0)
                                                      {
          													  while($row = mysqli_fetch_row($result))
                                                                 {   
																	$sid=$row[2];
													
									?>
							
                                        <tr>
										
                                            <td><?php echo $row[1];?>  </td>              
											
										    <td>
											<a   href="del-city.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-danger" name="deactivate">Deactivate</span></a>
											
											</td>
												
											
                                        </tr>
										 <?php		 
													 }}?>
										
                                    </tbody>
                                </table>
								</div>
										
										
										
									</form>
                    

                </div>
            </div>
        </div>
     </div>
<div>

<?php }?>

<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>