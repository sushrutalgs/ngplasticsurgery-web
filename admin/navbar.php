<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><?php echo Company_Name ?></h2>
    </a>
    <a href="javascript:void(0)" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="img/company_logo.jpg" alt="" style="width: 40px; height: 40px;" />
                <span class="d-none d-lg-inline-flex"><?php echo ucwords($_SESSION['username']); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="change-password.php" class="dropdown-item"><i class="fa fa-lock"></i> Change Password</a>
                <!-- <a href="#" class="dropdown-item">Settings</a> -->
                <a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
        </div>
    </div>
</nav>
