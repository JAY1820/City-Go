<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Service Provider List
                    </h4>
                </div>
                <div class="card-body">

                <table class="table table-stripped" id="myTable">
                    <thead class="bg bg-success">
                        <tr >
                            <th>name</th>
                            <th>email</th>
                            <th>contact</th>
                            <th>img</th>
                            <th>Service</th>
                            <th>city</th>
                            <th >Experience</th>
                             <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                                          include("includes/conn.php");
                                         $sql = 'SELECT * FROM service_provider WHERE status=1';
                                     $result =  mysqli_query($conn , $sql);
                                     if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_row($result)) {   
                                                    $sid=$row[2];
                                    
                    ?>
            
                        <tr>
                        
                            <td "><?php echo $row[3];?>  </td>              
                            <td ><?php echo $row[8];?></td>
                            <td ><?php echo $row[9];?></td>
                            <td><img src="../gallery/<?php echo $row[11];?>" height="150" width="150"></td>
                           
                            <td ><?php
                                 $sql3 = "SELECT * from services where  sid='$sid'";
                                     $result3 =  mysqli_query($conn,$sql3);
                                     if (mysqli_num_rows($result3)> 0) {
                                       while($row3 = mysqli_fetch_assoc($result3))
                                     {
                                         
                                         echo $row3['s_name'];
                                         
                                     }}
                                
                            
                            
                            ?>
                                </td>
                            <td ><?php echo $row[5];?></td>
                            <td ><?php echo $row[14];?></td>



                          
                            <td>
                            
                            <a  href="del1.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-dark btn-rounded">Blocked</span></a>
                                
                            
                        </tr>
                         <?php		 
                                     }}?>
                        
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