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
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
													<?php
													  $id=$_REQUEST['vid'];
													include("includes/conn.php");
       												  $sql = "SELECT * from services where sid='$id'";
        											 $result =  mysqli_query($conn,$sql);
    											     if (mysqli_num_rows($result)> 0) {
          											 while($row = mysqli_fetch_assoc($result)) {   
		
												?>
                                        <a href="#"><img class="profile-img-wrap" src="../gallery/<?php echo $row['s_img']; ?>" height="150px" width="150px" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $row['s_name']; ?></h3>
                                                
                                                <div class="staff-id">Service id  : <?php echo $row['sid']; ?> </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
													<span><?php echo $row['description']; ?> </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                           <?php }} ?> </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">Categories</a></li>
						<li class="nav-item"><a class="nav-link" href="#vendor" data-toggle="tab"> Provider</a></li>
						
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
					
								
						<div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div >
                                
                                <div>
                                    <div class="row">
									<?php
													  $id=$_REQUEST['vid'];
												include('includes/conn.php');
       												  $sql1 = "SELECT * from service_detail where sid='$id'";
        											 $result1 =  mysqli_query($conn,$sql1);
    											     if (mysqli_num_rows($result1)> 0) {
          											 while($row1 = mysqli_fetch_assoc($result1)) {   
		
												?>
                                        <div class="col-md-3 profile-info-left">
                                           
                                                <!-- <h3 class="user-name m-t-0 mb-0"><?php echo $row1['c_name']; ?></h3> -->
                                              
                                                <!-- <div class="staff-id">categories id  : </div> -->
												  <!-- <div class="staff-msg"><a href="add-sub-service.php?id= " class="btn btn-primary">view Sub-Service</a></div> -->
                                               
												<!-- <div class="staff-msg"><a href="del-service-details.php?id= " class="btn btn-primary">Delete service </a></div> -->
                                               

                                        </div>
										 <?php }} ?>	
                                        
                                    </div>
                                </div>
                           </div>                        
                        </div>
                    </div>
                </div>
								
			</div>
			<div class="tab-pane show active" id="vendor">
				<div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-danger">
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
												
        

		 
       												  $sql4 = "SELECT * from service_provider where sid='$id'";
        											 $result4 =  mysqli_query($conn , $sql4);

    											     if (mysqli_num_rows($result4) > 0) {
          													  while($row1 = mysqli_fetch_row($result4)) {    

									
									?>
                                        <tr>
                                            <td><?php echo $row1[3];?></td>
                                            <td><?php echo $row1[8];?></td>
                                            <td><img src="../gallery/<?php echo $row1[11];?>"class="avatar" height="150px" width="150px"/></td>
                                            <td><?php echo $row1[9];?></td>
                                            <td><?php echo $row1[4];?></td>

                                        </tr>
													 <?php }}?>
                                      
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