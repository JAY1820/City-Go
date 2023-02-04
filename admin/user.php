<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>USER
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-resposive">
                        <thead>
                            <tr>
                                
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Iamge</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include('includes/conn.php');

                                $sql = 'SELECT * FROM user';
                                $query_run = mysqli_query($conn, $sql);

                                if(mysqli_num_rows($query_run)> 0)
                                {
                                    while($row = mysqli_fetch_row($query_run))
                                    {
                                       
                                        ?>
                                    
                            <tr>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><img src="../gallery/<?php echo $row[6];?>"class="profile" height="100"width="100"/></td>
                                <td><?php echo $row[4];?></td>
                                <td><?php echo $row[5];?></td>
                                
                                
                                   
                            </tr>
                            <?php 
                                    }
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