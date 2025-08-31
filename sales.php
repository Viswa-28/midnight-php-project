<?php
session_start();
include('include/config.php');
include('include/head.php');

// Redirect to login page if not logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Admin Name from session
$adminName = $_SESSION['username'] ?? 'Admin';

// Total sales revenue
$salesQuery = "SELECT SUM(price * quantity) AS total_revenue FROM sales";
$salesResult = $conn->query($salesQuery);
$salesData = $salesResult->fetch_assoc();
$totalRevenue = $salesData['total_revenue'] ?? 0;

// Total orders
$ordersQuery = "SELECT COUNT(DISTINCT id) AS total_orders FROM sales";
$ordersResult = $conn->query($ordersQuery);
$ordersData = $ordersResult->fetch_assoc();
$totalOrders = $ordersData['total_orders'] ?? 0;

// Total quantity sold
$quantityQuery = "SELECT SUM(quantity) AS total_quantity FROM sales";
$quantityResult = $conn->query($quantityQuery);
$quantityData = $quantityResult->fetch_assoc();
$totalQuantity = $quantityData['total_quantity'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sales</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <div class="admin-header">
        <div class="admin-info">
            <div class="profile-container">
                <div class="profile-icon">👤</div>
                <div class="profile-details">
                    <span class="admin-name"><?= htmlspecialchars($adminName) ?></span>
                    <span class="admin-role">Administrator</span>
                </div>
                <div class="profile-actions">
                    <!-- <a href="#" class="profile-btn">My Profile</a> -->
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="parent">
        <div class="sidebar">
            <ul>
                <li><a href="sales.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'sales.php') echo 'active'; ?>">Sales</a></li>
                <li><a href="trending-products.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'trending-products.php') echo 'active'; ?>">Trending</a></li>
                <li><a href="user-dash.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'user-dash.php') echo 'active'; ?>">Users</a></li>
                <li><a href="contact.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'contact.php') echo 'active'; ?>">Contact</a></li>
            </ul>
        </div>

        <div class="dashboard">
            <h2>Dashboard</h2>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-box">
                    <h3>Total Revenue</h3>
                    <p>₹<?= number_format($totalRevenue, 2) ?></p>
                </div>

                <div class="stat-box">
                    <h3>Total Orders</h3>
                    <p><?= $totalOrders ?></p>
                </div>

                <div class="stat-box">
                    <h3>Products Sold</h3>
                    <p><?= $totalQuantity ?></p>
                </div>
            </div>

            <!-- Recent Sales -->
            <h3>Recent Sales</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
                        <th>Price (Each)</th>
                        <th>Total</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $recentSalesQuery = "SELECT * FROM sales ORDER BY sale_date DESC";

                    $result = $conn->query($recentSalesQuery);
                    if (!$result) {
                        die("Query failed: " . $conn->error);
                    }

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $orderId = $row['id'];
                            $productId = $row['product_id'];
                            $quantity = $row['quantity'];
                            $price = $row['price'];
                            $total = $quantity * $price;
                            $date = date("Y-m-d", strtotime($row['sale_date']));

                            echo "<tr>
                                    <td>$orderId</td>
                                    <td>$productId</td>
                                    <td>$quantity</td>
                                    <td>₹$price</td>
                                    <td>₹$total</td>
                                    <td>$date</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No recent sales found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
  const hamburger = document.querySelector(".hamburger");
  const sidebar = document.querySelector(".sidebar");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    sidebar.classList.toggle("active");
  });
</script>
</body>

</html>