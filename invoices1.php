<?php 
session_start();
include('includes/header.php');
include('conn.php');

 if(isset($_SESSION['uid'])) 
    {
        $id=$_SESSION['uid'];
        $sqlupdate = "SELECT * from user where uid='$id'";
    $result21 =  mysqli_query($conn , $sqlupdate);

    if (mysqli_num_rows($result21) > 0) {
               while($row23 = mysqli_fetch_row($result21)) {    

    
?>

   <!-- Start Banner Area -->
   <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text">
                <h1>About Us</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>INVOICE</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Modal area -->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="addfeedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" align="center">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FEEDBACK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="" method="POST">
            
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" name="">FeedBack</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="message" placeholder="Minimum 30 Word!">
            </div>
            <div class="mb-3">
                    <button type="submit" name="send" class="btn btn-warning">
                        send Review
                    </button>
            </div>
        </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" name="send">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- end modal -->



    <div class="reg-area default-padding-top">
        <div class="container">
            <div class="row">
			<div class="col-md-12 col-md-offset-1">
                <div class="reg-items">
                    <div class="col-md-8 reg-form default-padding-bottom">
                        <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h1 class="card-title text-bold">INVOICES</h1>
                               
								<div class="table-responsive">
									<table  class="table table-stripped" id="myTable">
                                    <thead class="bg bg-primary">
                                        <tr>
                                            <th>invoice no</th>
                                            <th>Provider name</th>
                                            <th>Service category</th>
                                            <th>Invoice date</th>
											<th>invoice Value</th>
											<th>feedback </th>
                                            <th>View Bills</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
												
        
                                        $id=$_SESSION['uid'];													
       												  $sql = "SELECT i.bookingid,i.totalsubservice,u.name,sp.pname,i.date,s.s_name  ,b.pid from invoice i, booking b, user u ,service_provider sp ,services s 
													 where i.bookingid= b.bookingid AND i.uid=u.uid AND u.uid=b.uid AND i.pid=sp.pid AND sp.pid=b.pid AND b.uid='$id' AND i.sid=s.sid AND s.sid=b.sid AND b.invoice=2 GROUP BY b.date ORDER BY i.id desc";
        											 $result =  mysqli_query($conn , $sql);

    											     if (mysqli_num_rows($result) > 0) {
          													  while($row = mysqli_fetch_row($result)) {   
															$pid1 =$row[6];															  

									
									?>
                                        <tr>
                                            <td><?php echo $row[0];?></td>
                                            <td><?php echo $row[3];?></td>
                                            <td><?php echo $row[5];?></td>
                                            <td><?php echo $row[4];?></td>
                                            <td><?php echo $row[1];?></td>
											<td>
									<a href="#feedback-form" class="popup-with-form btn btn-warning" data-bs-toggle="modal" data-bs-target="#addfeedback"> Feedback</a></td>
											<td><a href="bill.php?bid=<?php echo $row[0];?>" class="btn btn-success"> VIEW BILLS</a></td>

                                        </tr>
													 <?php 
													 if(isset($_REQUEST['send']))
{

    $uid1=$_SESSION['uid'];
    
    $desc=$_REQUEST['message'];
$review="insert into feedback
(uid,pid,description)values('$uid1','$pid1','$desc')";
$feedback=mysqli_query($conn , $review);
?>
<script>
        alert(' thanks for your feedback  !');
        window.location.href='invoices1.php';
</script>

<?php
}


													 }}
                                                      ?>
                                      
                                    </tbody>
                                </table>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
				
				
				</div>
				
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- <form method="post" id="feedback-form" class="mfp-hide white-popup-block">
        
        <div class="col-md-12 login-custom">
            <h4>Please Give Your Precious Review Feedbck</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group comments">
                       <textarea class="form-control" id="comments" name="message" placeholder="Tell Me About Your Query minimum 25 words *" pattern="[A-Za-z 0-9]{25}"  required></textarea>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="row">
                    <button type="submit" name="send">
                        send Review
                    </button>
                </div>
            </div>
            
        </div>
    </form> -->
    <?php }}} else{
        ?>
 <script>
                                                    alert('Login First !');
                                                    window.location.href='index.php';
                                            </script>

        <?php
    }  ?>
<?php 
include('includes/footer.php');
include('includes/script.php');
?>
