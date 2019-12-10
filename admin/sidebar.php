<!-- Fallback for active tab variable -->
<?php
    if (!isset($GLOBALS['activeTab'])) {
        $GLOBALS['activeTab'] = "";
    }
    
    // Function to determine if a given tab is active
    function checkActive($linkName, $activeTab){
        if (strcasecmp($linkName,$activeTab) == 0 ) { //0 means compared strings are equal
            echo '<li class="nav-item active">';
        }else{
            echo '<li class="nav-item">';
        }
    }
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
    <img src="../img/miah.logo.white.png" alt="MIAH Logo">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php
        
    ?>
    
    <?php
        checkActive("dashboard",$GLOBALS['activeTab']);
    ?>
        <a class="nav-link" href="index"> <!-- Index file href = "index" -->
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span> <!-- Index file name dashboard -->
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Link1 -->
    <?php
        checkActive("link1",$GLOBALS['activeTab']);
    ?>
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-user-edit"></i>
        <span>Link 1</span></a>
    </li>

    <!-- Nav Item - Link2 -->
    <?php
        checkActive("link2",$GLOBALS['activeTab']);
    ?>
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-table"></i>
        <span>Link 2</span></a>
    </li>

    <!-- Nav Item - Link3 -->
    <?php
        checkActive("link3",$GLOBALS['activeTab']);
    ?>
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-sad-cry"></i>
        <span>Link 3</span></a>
    </li>

    <!-- Nav Item - Link3 -->
    <?php
        checkActive("tables",$GLOBALS['activeTab']);
    ?>
    <a class="nav-link" href="tables">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->