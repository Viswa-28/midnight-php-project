<?php
session_start();

// Redirect to login page if not logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Admin Name from session
$adminName = $_SESSION['username'] ?? 'Admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - <?php echo $pageTitle ?? 'Dashboard'; ?></title>
    <?php include('head.php'); ?>
</head>
<body class="bg-dark">
    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="dashboard.php">
                <span class="fs-4 text-light">Midnight Vogue</span>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                <i class="bi bi-person-fill text-light"></i>
                            </div>
                            <span class="ms-2 text-light"><?= htmlspecialchars($adminName) ?></span>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                        <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-circle me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="settings.php"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'sales.php' ? 'active' : ''; ?>" href="sales.php">
                                <i class="bi bi-graph-up me-2"></i>
                                Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'trending-products.php' ? 'active' : ''; ?>" href="trending-products.php">
                                <i class="bi bi-fire me-2"></i>
                                Trending
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'user-dash.php' ? 'active' : ''; ?>" href="user-dash.php">
                                <i class="bi bi-people me-2"></i>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : ''; ?>" href="contact.php">
                                <i class="bi bi-envelope me-2"></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <?php if (isset($pageHeader)): ?>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                        <h1 class="h2 text-light"><?php echo $pageHeader; ?></h1>
                        <?php if (isset($headerButtons)): ?>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <?php echo $headerButtons; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Page Content -->
                <?php include($contentPath); ?>
            </main>
        </div>
    </div>

    <!-- Floating Action Button (if needed) -->
    <?php if (isset($showFab) && $showFab): ?>
    <a href="<?php echo $fabLink ?? '#'; ?>" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
        <i class="bi bi-plus fs-2"></i>
    </a>
    <?php endif; ?>
</body>
</html>
