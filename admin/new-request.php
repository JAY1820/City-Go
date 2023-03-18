<?php 
include('includes/header.php');


?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Service Provider Accept
                    </h4>
                </div>
                <div class="card-body">

                <form name="feedback" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Dashboard > Provider Joining Request</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Provider Joining Request</h6>
                               
								<div class="table-responsive">
									<table class="table table-stripped" id="myTable"> 
                                    <thead class="">
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
       												  $sql = 'SELECT * from service_provider where status=0';
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
											<a   href="disable1.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-success">Approved</span></a>
											<a  href="del1.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-danger">Blocked</span></a>
                                                    </td>
												
											
                                        </tr>
										 <?php		 
													 }}?>
										
                                    </tbody>
                                </table>
								</div>
                            </div>
                        </div>
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