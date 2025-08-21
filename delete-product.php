<?php
include('include/config.php');
include('include/head.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM tproduct WHERE id = $id";
        if ($conn->query($query)) {
            header("Location: trending-products.php");
            exit();
        } else {
            echo "Delete failed: " . $conn->error;
        }
    } else {
        echo "Invalid ID.";
    }
    exit();
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Optional: Load product name to show in confirmation
    $result = $conn->query("SELECT name FROM tproduct WHERE id = $id");
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found.";
        exit();
    }
} else {
    echo "No product ID specified.";
    exit();
}
?>

<h2 class="delete-title">Delete Product</h2>
<p class ="delete-title">Are you sure you want to delete the product <strong><?= htmlspecialchars($product['name']) ?></strong>?</p>

<form method="post" action="delete-product.php" class="delete-form">
    <input type="hidden" name="id" value="<?= $id ?>" class="delete-id">
    <button type="submit" class="delete-button">Yes, Delete</button>
    <a href="trending-products.php"><button type="button">Cancel</button></a>
</form>


?>