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
                    <?php 
                    if(isset($_POST['edit_btn_service']))
                    {
                        $id = $_POST['edit_id'];
                        $query = "SELECT s.*, n.s_name FROM service_detail s, services n WHERE n.sid = s.sid AND  ssid = '$id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run)> 0 )
                        {
                            foreach($query_run as $row)
                            //while($row = mysqli_fetch_assoc($sqli_run))
                            {
                                ?>
                            
                    <form action="code.php" method="POST">
                        <div class="row">
                        <input type="hidden" name="service_id" value="<?php echo $row['ssid'];?>">
                        <input  name='addservice' type='hidden'/>
                            <div class="col-md-12 mb-3">
                                <label for="">Service Name</label>
                                <input type="text" name="edit_servicen"  value="<?php echo $row['s_name'];?>" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Service Type</label>
                                <input type="text" name="edit_cname"  value="<?php echo $row['c_name'];?>" class="form-control" >
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-success" name="update_st">Update Type</button>
                            </div>
                            
                        </div>
                    </form>
                    <?php 
                            }
                        }
                        else
                        {

                        }
                    }
                    
                        //$sqli = "SELECT s.* , n.s_name FROM service_detail s, services n WHERE n.sid = s.sid";

                    ?>
                </div>
            </div>
        </div>
     </div>
<div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>