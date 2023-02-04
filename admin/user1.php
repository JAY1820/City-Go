<?php 
include('includes/header.php');

include('includes/conn.php');
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
                <table  class="table table-stripped" id="myTable">
                                    <thead class="">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>image</th>
                                            <th>Phone number</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												include("includes/conn.php");
        

														$id=$_REQUEST['id'];
       												  $sql = "SELECT * from user where uid='$id'";
        											 $result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {    

									
									?>
                                        <tr>
                                            <td><?php echo $row[1];?></td>
                                            <td><?php echo $row[2];?></td>
                                            <td><img src="../gallery/<?php echo $row[6];?>"class="profile" height="100"width="100"/></td>
                                            <td><?php echo $row[4];?></td>
                                            <td><?php echo $row[5];?></td>

                                        </tr>
													 <?php }}?>
                                      
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