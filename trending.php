<?php
include('include/config.php');
include('include/head.php');

?>




<div class="sidebar">
  <ul>
    <li><a href="./dashboard.php" >Sales</a></li>
    <li><a href="./trending.php"class="active" >Trending</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="#">Services</a></li>
  </ul>
</div>



<section class="products-trending">


    <?php

    $sql = "SELECT * FROM tproduct";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $img=$row['image'];
           $name=$row['name'];
           $description=$row['description'];
           $price=$row['price'];
         

            echo "<div class='product-card'>
            <img src='uploads/$img' alt='Product Image'>
            <h3>$name</h3>
            <p>$description</p>
            <p>Price: $price</p>
            <button>Buy Now</button>
            </div>";
        }
    }
     else {
        echo "0 results";
    }
    ?>


<div class="show-products">


</div>


    <button><a href="trending-create.php">Add product</a></button>

</section>