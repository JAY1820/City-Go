<?php 
include('includes/header.php');

include('includes/conn.php');
?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>FeedBack
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-resposive">
                        <thead>
                            <tr>
                            <th width="">User Id</th>
                            <th width="">Provider Id</th>
                            <th width="">Feedback Message</th>
                            
                            <!-- <th width="15%">Date</th> -->
                            <th width="15%">Status</th>
                            <th width="20%">Action</th>
                            
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
													      include("includes/conn.php");
       												  $sql = 'SELECT * from feedback';
        											 $result =  mysqli_query($conn , $sql);
    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {    
													
									?>
                        
                        <tr>
										
                                        <td width=""><a href="user1.php?id=<?php echo $row[1]; ?>"><?php echo $row[1];?></a>  </td>              
                                        <td width=""><?php echo $row[2];?></td>
                                        <td width=""><?php echo $row[3];?></td>
                                        <!-- <td width="15%"><?php echo $row[4];?></td> -->
                                        <td width=""><?php if($row[5]=='1'){?>
                                        <strong><?php echo "Approved"; ?></strong><?php	} else {?>
                                        <strong><?php echo "Pending"; ?></strong><?php }	?></td>
                                        <td width="20%"><?php if($row[5]=='1'){?>
                                        <a   href="disable.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-warning">Disabled</span></a>
                                        <a  href="del.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-danger">Delete</span></a>
                                        <?php	} else {?>	
                                        <a   href="Enable.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-success">Enable</span></a>
                                        <a  href="del.php?id=<?php echo $row[0]; ?>">	<span class="btn btn-danger">Delete</span></a>
                                        <?php }	?></td>
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