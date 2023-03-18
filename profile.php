<?php 
session_start();
include('includes/header.php');
include('conn.php');
?>
<?php if(isset($_SESSION['uid'])) 
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
                <h1>Login</h1>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>PROFILE</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <div class="adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="gallery/<?php echo $row23[6]; ?>" alt="Thumb">
                    <div class="desc">
                        <h4><?php echo $row23['1']; ?></h4>
                        <span><?php echo $row23['5']; ?></span>
                       
                    </div>
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    My Profile
                                </a>
                            
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Edit Profile
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">

                                    <ul>
                                        <li>
                                            Contact <span><?php echo $row23['4']; ?></span>
                                        </li>
                                        <li>
                                            Email <span><?php echo $row23['2']; ?></span>
                                        </li>
                                        <li>
                                            Address <span><?php echo $row23['5']; ?></span>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                           

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                <form method="post" name="update " >
                                    <div class="row">
                                      
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name" name="name" value="<?php echo $row23['1']; ?>" type="text" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email" name="email" type="email" value="<?php echo $row23['2']; ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Phone" name="phone" type="number" value="<?php echo $row23['4']; ?>"  pattern="[0-9]{10}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <textarea class="form-control" placeholder="Address" name="address"><?php echo $row23['5']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="row">
                                                <button type= "submit"  class="btn btn-primary submit-btn" name="detail">Update Details</button>
                                         </div>
                                                
                                            </div>
                                        
                                    </div>
                                    </form>
									<div class="update-pass">
                                        <h4>Change Password</h4>
                                        
                                        <div class="row">
                                            <form method="post" >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <input class="form-control" placeholder="Chose Password" type="password" id="myInput" name="pass3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <div <?php if (isset($name_error1)): ?> class="form_error" <?php endif ?> >
                                                    <input type="password"  class="form-control" placeholder="Retype Password" id="myInput" name="pass2">
                                                    <?php if (isset($name_error1)): ?>
										            <span><?php echo $name_error1; ?></span>
										            <?php endif ?>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Old Password" type="password"id="myInput" name="pass1">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" name="pass">
                                                       Change Password
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="update-pass">
                                        <h4>Change Profile Photos</h4>
                                        
                                        <div class="row" >
                                            <form  method="post" enctype="multipart/form-data" >
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label for="profile"> Upload  Profile photos</label>
                                                        <input class="form-control" name="img" type="file">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <button type="submit" name="pic">
                                                        Change Profile pic
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Students Profile -->
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