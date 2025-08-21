<?php

include('include/config.php');
include('include/head.php');



?>
<div class="parent">
    <div class="sidebar">
<ul>
<ul>
  <li><a href="">Sales </a></li>
  <li><a href="./trending-products.php">trending</a></li>
  <li><a href="contact.php">contact</a></li>
  <li><a href="">Sales 4</a></li>
</ul>


</ul>
</div>

<div class="trending-products">
    <?php
$quary="SELECT * FROM tproduct";
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
            <button class="cred-button"><a href="ubdate-product.php?id=' . $row['id'] . '">update</a></button>
            <button class="cred-button"><a href="delete-product.php?id=' . $row['id'] . '">delete</a></button>
        </div>
      </div>';

}
    ?>

    




</div>




<button><a href="add-product.php" class="primary-btn create">create product</a></button>
</div>