<?php 
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
                    <h4>Users
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-resposive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Operation</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $query = "SELECT * FROM userlogin";
                            $query_run = mysqli_query($conn, $query);
                          
                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                  ?>
                                  
                            <tr>
                                <td><?php echo $row['uid']; ?></td>
                                <td><?php echo $row['uname']; ?></td>
                                <td><?php echo $row['uemail']; ?></td>
                                <td><?php echo 9988776655 ?></td>
                                <td><?php echo $row['upassword']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary"><a href="edit-user.php?id=<?php $row=['uid']; ?>" class="text-light">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="user-delete.php?deleteid='.$id'" class="text-light">Delete</a> </button>
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