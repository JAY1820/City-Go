<?php
include('includes/conn.php');
include('includes/header.php');


?>
<div class="container-fluid px-4">
     <h4 class="mt-4">Service Dashboard</h4>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Services
                    </h4>
                </div>
                <div class="card-body">
                <?php
                if(isset($_POST['edit_btn']))
                {
                    $id = $_POST['edit_id'];
                    
                    $query = "SELECT * FROM services WHERE sid='$id'";
                    $query_run = mysqli_query($conn, $query);

                    foreach($query_run as $row)
                    {
                        ?>
                  
                


                    <form class="user" action='code.php' method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="edit_id" value="<?php echo $row['sid'];?>">
                        <input  name='addservice' type='hidden'/>
							<div class="form-group">
								<label>Service Name</label>
								<input class="form-control" type="text" name="edit_sname" value="<?php echo $row['s_name'];?>">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="edit_desc" id="long_desc"><?php echo $row['description'];?></textarea>
                            </div>
                           
							
						    <div class="form-group">
                                <label class="display-block">Icon</label>
								<input class="form-control" type="file" name="img">
							
                            </div>
							         
							
									        <div class="form-group">
                                <label class="display-block">Visiting Price</label>
								<input class="form-control" type="number"  maxlength="3" name="edit_rate" value="<?php echo $row['visiting_price'];?>">
								</div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-success" type="submit" id="submit" name="updatebtn">Update Service</button>
                            </div>
                        </form>
            <?php
                }        
            }
            ?>
            
                    

                </div>
            </div>
        </div>
     </div>
<div>
    


<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>