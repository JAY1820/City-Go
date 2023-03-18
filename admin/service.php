<?php 
include('includes/conn.php');
$query = "SELECT * FROM services";
$query_run = mysqli_query($conn, $query);

?>
<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     <h4 class="mt-4">Service Dashboard</h4>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
         <li class="breadcrumb-item active">Service</li>
     </ol>
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Services
                        <a href="add-service.php" class="btn btn-primary float-end">Add Services</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    
                    if(isset($_SESSION['success']) && $_session['success'] !='')
                    {
                        echo '<h2 class="bg-info> '.$_SESSION['success'].'</h2>';
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['status']) && $_session['status'] !='')
                    {
                        echo '<h2 class="bg-danger"> '.$_SESSION['status'].'</h2>';
                        unset($_SESSION['status']);
                    }
                    
                    
                    
                    
                    ?>
                    <table class="table table-resposive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Service Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                          
                          if(mysqli_num_rows($query_run) > 0)
                          {
                              while($row = mysqli_fetch_assoc($query_run))
                              {
                                  ?>
                            <tr>
                                <td><?php echo $row['sid']; ?></td>
                                <td><?php echo $row['s_name']; ?></td>
                                <td><span ><img src="../gallery/<?php echo $row['s_img']; ?>" height="150" width="150"/></span></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['visiting_price']; ?></td>
                                <td>
                                    <form action="edit-service.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['sid']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-primary">Edit</button>
                                   </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['sid']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                                   </form>
                                </td>
                            </tr>
                            <?php        
                        }
                    }
                    
                    else
                    {
                        echo "NO record found";
                    }
                    
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
<div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>