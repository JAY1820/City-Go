<?php 
include('includes/header.php');

include('includes/conn.php');
?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact Us
                    </h4>
                </div>
                <div class="card-body">
                <table  class="table table-stripped" id="myTable">
                                    <thead class="">
                                        <tr>
                                            <th>Name</th>
											 <th>Email</th>
                                            <th>phone</th>
                                            <th>Message</th>
											<th>user Type</th>
                                            <th>Reply</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												include("includes/conn.php");
        

		 
       												  $sql = 'SELECT * from contact';
        											 $result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {    

									
									?>
                                        <tr>
                                            <td><?php echo $row[1];?></td>
											<td><?php echo $row[3];?></td>
                                            <td><?php echo $row[2];?></td>
											<td><?php echo $row[4];?></td>
											<td><?php if($row[6]==1){?>
											<b>Provider</b><?php }else{ ?><b>Customer</b><?php }?>
											
											</td>
                                           
                                            <td><a href="mailto:<?php echo $row[3];?>"><button type="submit" class="btn btn-secondary account-btn form-control "> Reply</button></a><a href="delcon.php?did=<?php echo $row[0];?>"><button type="submit" name="delete" class="btn btn-warning account-btn form-control "> Delete</button></a></td>
                                            

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