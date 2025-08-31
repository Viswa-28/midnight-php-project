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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Trending Products</title>
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
                    <a href="profile.php" class="profile-btn">My Profile</a>
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </div>
        </div>
    </div>
<div class="parent">
    <div class="sidebar">
        <ul>
            <li><a href="sales.php">Sales </a></li>
            <li><a href="./trending-products.php">Trending</a></li>
            <li><a href="user-dash.php">Users</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </div>

    <div class="trending-products">
        <?php
        $quary="SELECT * FROM tproduct order by id desc";
        $result=$conn->query($quary);

        while($row=$result->fetch_assoc())
        {
            $name=$row['name'];
            $image=$row['image'];
            $price=$row['price'];
            // $quantity=$row['quantity'];
            $description=$row['description'];
            $imagePath = 'http://localhost/project/images/' . $image;
            echo '<div class="product">
                <img src="' . $image . '" alt="">
                <h3 class="product-name">' . $name . '</h3>
                <p class="product-price">₹' . $price . '</p>
                <div class="cred-con">
                    <button class="cred-button"><a href="ubdate-product.php?id=' . $row['id'] . '">Edit</a></button>
                    <button class="cred-button"><a href="delete-product.php?id=' . $row['id'] . '">Delete</a></button>
                </div>
            </div>';
        }
        ?>
    </div>

    <button><a href="add-product.php" class="primary-btn create">create product</a></button>
</div>
</body>
</html>