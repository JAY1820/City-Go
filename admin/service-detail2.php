<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Sub Service
                    </h4>
                </div>
                <div class="card-body">

                <form class="user" action='addsercicesdeatail2.php' method="POST" >
                        
                        <div class="form-group">
                            <label>categories Name</label>
                            <select name="staff1" class="form-control" id="categories" >
                            <option>Select Categories</option>
                                    <?php
                                                 
                                                include("includes/conn.php");
                                                     $sql = "SELECT * from services ";
                                                 $result =  mysqli_query($conn,$sql);
                                                 if (mysqli_num_rows($result)> 0) {
                                                   while($row = mysqli_fetch_assoc($result)) {   
    
                                            ?>
                                            
                                                        
          <option value="<?php echo $row['sid'];?>" ><?php echo $row['s_name']; 	}} ?></option></select>
                                            
                                            
                                            
                                            
                                            
                                            
                
                        </div>
                        <br/>
                  
                                <div class="form-group">
                                <label>service name</label>
                                <select name="staff" id="subservice" class="form-control" required="required">
                                    
                                            
                                            <option  value=""></option>
                           
                                </select>
                                </div>
                                <br/>
                         
                        <div class="form-group">
                            <label>sub-service name</label>
                                    
                            <input class="form-control" type="text" name="cname"  >
                        </div>
                        <br/>

                        <div class="m-t-20 text-center">
                            <button class="btn btn-warning submit-btn" type="submit" name="save">save Service details</button>
                        </div>
                    </form>
                    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sub Services Details
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-resposive" >
                        <thead>
                            
                            <tr>
                                <th>Id</th>
                                <th>Service Type</th>
                                <th>Sub Service</th>
                                
                                <th>Edit</th>
                                <!-- <th>Delete</th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                           // $query = "SELECT * FROM service_detail";
                           $query = "SELECT s.* , c.c_name FROM sub_service s, service_detail c WHERE c.ssid = s.ssid";
                           
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    
                              ?> 
                        
                            <tr>
                                <td><?php echo $row['sbid']; ?></td>
                                <td><?php echo $row['c_name']; ?></td>
                                <td><?php echo $row['sub_name']; ?></td>
                                
                            
                                <td>
                                    <form action="edit-subservice.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['sbid']; ?>">
                                        <button type="submit" name="edit_btn_subservice" class="btn btn-primary">Edit</button>
                                   </form>
                                </td>
                                <td>
                                    <!-- <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="">
                                        <button type="submit" name="delete_btn_servicetype" class="btn btn-danger">Delete</button>
                                   </form> -->
                                </td>
                            </tr>
                            <?php  }
                                    }
                            
                            ?>
                        </tbody>
                    </table>
                    </div>
            </div>
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
include('includes/scripts.php');

?>