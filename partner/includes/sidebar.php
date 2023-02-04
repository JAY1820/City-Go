<div id="layoutSidenav_nav">

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <a class="navbar-brand ps-3 " class="text-dark" href="index.php">Provider Dashboard</a>
            <!-- <div class="logo" >
                <a href="#">
                    <img src="../gallery\logo.png" alt="Listagram" />
                </a>
            </div> -->
            <br/>
                <div class="account-img" align="center">
                    <img  src="../gallery/<?php echo $pro[11];?>" alt="<?php echo $pro[3];?>" height="100px" width="100px" />
                </div>
                <h4 align="center" class="name"><?php echo $pro[3];?>!</h4>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                
                
                
                
                <a class="nav-link" href="pending.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-spinner"></i></div>
                    Pending Order
                </a>
                
                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div>
                    Order History
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="viewaccept.php">Accept Order</a>
                        <a class="nav-link" href="deny.php">Reject Order</a>
                        
                    </nav>
                </div>
                <!-- <a class="nav-link" href="service-provider.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-fw fa-box"></i></div>
                    Contact Us
                </a> -->
                <a class="nav-link" href="invoices.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-receipt"></i></div>
                    Invoice
                </a>
                <!-- <a class="nav-link" href="service-provider.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-fw fa-box"></i></div>
                    My Profile
                </a> -->
                <a class="nav-link" href="adminpay.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
                    Company Payment
                </a>
                
                
                
                <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                <!-- <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <!-- <div class="small">Logged in as:</div> -->
            Home Service Provider
        </div>
    </nav>
</div>
                