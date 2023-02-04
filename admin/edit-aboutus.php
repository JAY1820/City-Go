<?php 
include('includes/conn.php');
include('includes/header.php');


?>


<div class="container-fluid px-4">
     <h4 class="mt-4">About Us Dashboard</h4>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
         <li class="breadcrumb-item active">About US Edit</li>
     </ol>
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit About Us
                    </h4>
                </div>
                <div class="card-body">
                <?php
                if(isset($_POST['about_edit_btn']))
                {
                    $id = $_POST['about_edit_id'];
                
                    $query = "SELECT * FROM about_us WHERE aid='$id'";
                    $query_run = mysqli_query($conn, $query);
                
                    foreach($query_run as $row)
                    {
                        ?>
                        
                  



                <form action="code.php" method="post" enctype="multipart/form-data">
                      <div class="box box-primary col-md-5">
                        <h1>aboutus</h1>
                        <input type="hidden" name="about_edit_id" value="<?php echo $row['aid'];?>">
                        <input  name='addaboutus' type='hidden'/>
                        <div class="form-group col-md-8">
                          <label for="inputtitle4">title</label>
                          <input type="text" name="edit_title" class="form-control" id="inputtitle4" value="<?php echo $row['title'];?>">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <label for="inputdescription4">description</label>
                          <input type="text" name="edit_description" class="form-control" id="inputdescription4" value="<?php echo $row['description'];?>">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <label for="inputimage4">image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <button type="button" class="btn btn-primary" ><a href="aboutus.php" class="text-light"> Close</a></button>
                          <button type="submit" name="About_Add_btn" class="btn btn-success">Add</button>
                        </div>
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