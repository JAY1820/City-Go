<?php 
include('includes/conn.php');
$query = "SELECT * FROM about_us";
$query_run = mysqli_query($conn, $query);

?>

<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     <h4 class="mt-4">Service Dashboard</h4>
     <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
         <li class="breadcrumb-item active">Add About Us</li>
     </ol>
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>About US
                        <a href="add-aboutus.php" class="btn btn-primary float-end">Add About US</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-resposive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
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
                                <td><?php echo $row['aid']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><span ><img src="../gallery/<?php echo $row['image']; ?>" height="150" width="150"/></span></td>
                                <td>
                                    <form action="edit-aboutus.php" method="POST">
                                        <input type="hidden" name="about_edit_id" value="<?php echo $row['aid']; ?>">
                                        <button type="submit" name="about_edit_btn" class="btn btn-primary">Edit</button>
                                   </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="about_delete_id" value="<?php echo $row['aid']; ?>">
                                        <button type="submit" name="about_delete_btn" class="btn btn-danger" >Delete</button>
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