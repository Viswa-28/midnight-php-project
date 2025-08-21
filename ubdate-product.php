<?php
include('include/config.php');
include('include/head.php');


$name = $description = $price = $image = '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (!empty($id)) {
    $query = "SELECT * FROM tproduct WHERE id = $id";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image'];
    } else {
        echo "Product not found.";
        exit;
    }
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $existingImage = $_POST['existing_image'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = basename($_FILES['image']['name']);
        $targetPath = "images/" . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $image = $targetPath;
        } else {
            echo "Image upload failed.";
            exit;
        }
    } else {
        $image = $existingImage; 

    $query = "UPDATE tproduct 
              SET name = '$name', 
                  description = '$description', 
                  price = '$price', 
                  image = '$image' 
              WHERE id = $id";

    if ($conn->query($query)) {
        header("Location: trending-products.php");
        exit();
    } else {
        echo "Update failed: " . $conn->error;
    }
}}
?>

<form action="ubdate-product.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="existing_image" value="<?= htmlspecialchars($image) ?>">

    <input type="text" name="name" placeholder="name" value="<?= htmlspecialchars($name) ?>" required>
    <input type="text" name="description" placeholder="description" value="<?= htmlspecialchars($description) ?>" required>
    <input type="text" name="price" placeholder="price" value="<?= htmlspecialchars($price) ?>" required>

    <p>Current Image:</p>
    <img src="<?= $image ?>" alt="Product Image" width="120"><br><br>

    <label>Upload New Image (optional):</label>
    <input type="file" name="image"><br><br>

    <input type="submit" name="submit" value="Update Product" class="submit">
</form>
