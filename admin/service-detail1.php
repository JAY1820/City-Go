<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Service Types
                    </h4>
                </div>
                <div class="card-body">
                <form class="user" action='addsercicesdeatail1.php' method="POST" >
                    <div class="form-group">
                        <label>Categories Name</label>
                        <select name="staff" class="form-control" >
                        <?php
                                                     include("includes/conn.php");
                                                          $sql = "SELECT * from services ";
                                                      $result =  mysqli_query($conn,$sql);
                                                      if (mysqli_num_rows($result)> 0)
                                                       {
                                                        while($row = mysqli_fetch_assoc($result)) 
                                                        {   
         
                                                 ?>
													 
                                        
                                                    
                     <option value="<?php echo $row['sid'];?>" ><?php echo $row['s_name']; 	}} ?></option></select>
                                        
                                        
                                        
                                        
                                        
                                        
            
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Service Name</label>
                                
                        <input class="form-control" type="text" name="cname"  >
                    </div>
                        </br>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit" name="save">save Service details</button>
                    </div>
                </form>
                        

                </div>
                <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Services Details
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-resposive" >
                        <thead>
                            
                            <tr>
                                <th>Id</th>
                                <th>Service Type</th>
                                <th>Service Name</th>
                                
                                <th>Edit</th>
                                <!-- <th>Delete</th> -->
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                           // $query = "SELECT * FROM service_detail";
                           $query = "SELECT s.*, n.s_name FROM service_detail s, services n WHERE n.sid = s.sid";
                           
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    
                              ?> 
                        
                            <tr>
                                <td><?php echo $row['ssid']; ?></td>
                                <td><?php echo $row['c_name']; ?></td>
                                <td><?php echo $row['s_name']; ?></td>
                                
                            
                                <td>
                                    <form action="edit-service-type.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['ssid']; ?>">
                                        <button type="submit" name="edit_btn_service" class="btn btn-primary">Edit</button>
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
<div>


<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>