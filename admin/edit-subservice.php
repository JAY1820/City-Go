<?php 
include('includes/header.php');

include('includes/conn.php');
?>
<div class="container-fluid px-4">
     
     <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sub Service
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_POST['edit_btn_subservice']))
                    {
                        $id = $_POST['edit_id'];
                        $query = "SELECT * from sub_service where sbid = '$id'";
                        $query_run = mysqli_query($conn, $query);
                        if(mysqli_num_rows($query_run)> 0 )
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                             

                <form action="code.php" method="POST">
                        <div class="row">
                        <input type="hidden" name="subservice_id" value="<?php echo $row['sbid'];?>">
                        <input  name='addservice' type='hidden'/>
                            <div class="col-md-12 mb-3">
                                <label for="">Sub Service</label>
                                <input type="text" name="edit_sservice"  value="<?php echo $row['sub_name']; ?>" class="form-control">
                            </div>
                            <!-- <div class="col-md-12 mb-3">
                                <label for="">Service name</label>
                                <input type="text" name="edit_sname"  value="" class="form-control" >
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Sub Service</label>
                                <input type="text" name="edit_cname"  value="" class="form-control" >
                            </div> -->
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-success" name="update_sservice">Update Type</button>
                            </div>
                            
                        </div>
                    </form>
                    <?php 
                            }
                        }
                    }
                    
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