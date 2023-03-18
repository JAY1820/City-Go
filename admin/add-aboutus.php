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


                    <form action="code.php" method="post" enctype="multipart/form-data">
                      <div class="box box-primary col-md-5">
                        <h1>aboutus</h1>
                        <div class="form-group col-md-8">
                          <label for="inputtitle4">title</label>
                          <input type="text" name="title" class="form-control" id="inputtitle4" placeholder="title">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <label for="inputdescription4">description</label>
                          <input type="text" name="description" class="form-control" id="inputdescription4" placeholder="description">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <label for="inputimage4">image</label>
                          <input type="file" name="image" class="form-control">
                        </div>
                        </br>
                        <div class="form-group col-md-8">
                          <button type="button" class="btn btn-primary" ><a href="aboutus.php" class="text-light"> Close</a></button>
                          <button type="submit" name="Add_btn" class="btn btn-success">Add</button>
                        </div>
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