<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
            Notifications
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
            <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
            </div>
            </div>
            <div>
            <div class="small text-gray-500">December 12, 2019</div>
            <span class="font-weight-bold">A new monthly report is ready to download!</span>
            </div>
        </a>
        </div>
    </li>

    <!-- Nav Item - Custodian Feedback -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="custodianMsgDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-comment fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="custodianMsgDropdown">
        <h6 class="dropdown-header">
            Custodian Feedback
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="../img/admin-icon.png" alt="Custodian">
            <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
            <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">View All</a>
        </div>
    </li>
    
    <!-- Nav Item - Member Feedback -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="memberMsgDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-comment-alt fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="memberMsgDropdown">
        <h6 class="dropdown-header">
            Member Feedback
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="../img/admin-icon.png" alt="Member">
            <div class="status-indicator bg-warning"></div>
            </div>
            <div>
            <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">View All</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guma</span>
        <img class="img-profile rounded-circle" src="../img/admin-icon.png" alt="Administrator">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
        </div>
    </li>
    </ul>
</nav>
<!-- End of Topbar -->