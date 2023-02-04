<?php
session_start();
include('includes/conn.php');

?>
 <?php 
                        if(isset($_POST['save']))
                        {
                            $id = $row['sid'];
                            $sname = $_POST['sname'];
                            $desc = $_POST['desc'];
                            $img = $_FILES["img"]['name'];
                            $rate = $_POST['rate'];

                            $query = "INSERT INTO services(s_name, description, s_img, visiting_price) VALUES ('$sname', '$desc', '$img', '$rate')";
                            $query_run = mysqli_query($conn, $query);
                            
                            if($query_run)
                            {
                                move_uploaded_file($_FILES["img"]['tmp_name'], "../gallery/".$_FILES["img"]["name"]);
                                $_SESSION['success'] = "Services Has been added";
                                header('Location: service.php');
                                exit(0);
                                
                            }
                            else
                            {
                                $_SESSION['status'] = "Something went wrong";
                                header('Location: service.php');
                                exit(0);
                            }
                        }
                        
                        
                        ?>
<?php 
include('includes/header.php');


?>

<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Services
                    </h4>
                </div>
                <div class="card-body" >

                
                       <form class="user" action='' method="POST" enctype="multipart/form-data">
                        <input  name='addservice' type='hidden'/>
							<div class="form-group">
								<label>Service Name</label>
								<input class="form-control" type="text" name="sname">
							</div>
                            </br>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="desc" id="long_desc"></textarea>
                            </div>
                            </br>
                           
							
						    <div class="form-group">
                                <label class="display-block">Icon</label>
								<input class="form-control" type="file" name="img">
							
                            </div>
                    </br>
							         
							
									        <div class="form-group">
                                <label class="display-block">Visiting Price</label>
								<input class="form-control" type="number"  maxlength="3" name="rate">
								</div>
                    </br>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-success" type="submit" id="submit" name="save">Create Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>


                </div>
            </div>
        </div>
     </div>
<div>


<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>