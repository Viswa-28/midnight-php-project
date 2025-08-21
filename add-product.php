<?php
include('include/config.php');
include('include/head.php');


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Image upload
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageFolder = 'uploads/' . basename($imageName);

    // Move uploaded file to images folder
    if (move_uploaded_file($imageTmpName, $imageFolder)) {
        // Save product info into the database
        $stmt = $conn->prepare("INSERT INTO tproduct (name, image, price) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $name, $imageFolder, $price); // s = string, d = double

        if ($stmt->execute()) {
            echo "Product uploaded successfully!";
            header("Location: trending-products.php");
        } else {
            echo "Database error: " . $stmt->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

?>
<h2 class="add-heading">add product</h2>

<form action="add-product.php" method="post" enctype="multipart/form-data">
<input type="text" name="name" placeholder="name">
<input type="text" name="description" placeholder="description">
<input type="text" name="price" placeholder="price">
<input type="file" name="image" id="" placeholder="image">
<input type="submit" name="submit" value="submit" class="submit">


</form>
