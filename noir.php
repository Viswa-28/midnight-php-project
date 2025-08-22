<?php
include('include/config.php');
include('include/head.php');
include('include/navbar.php');
?>



<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tproduct WHERE id = $id";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $name = $row['name'];
  $description = $row['description'];
  $price = $row['price'];
  $image = $row['image'];
}

?>
.
<div class="breadcrumb">
  <a href="./index.php" class="home-link">
    <i class="bi bi-house-door-fill"></i> Home
  </a>
  <span class="separator">/</span>
  <span class="current-page">Noir Muse</span>
</div>

<div class="product">
  <div class="left">
    <img src="<?php echo $image;   ?>" alt="">
  </div>
  <div class="right">
    <h2><?php echo $name;   ?></h2>
    <div class="star-container">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
    </div>
    <p class="fs-25">Rs. <?php echo $price;   ?></p>
    <p class="description"><?php echo $description;   ?></p>
    <h3 class="product-size">Size</h3>
    <form action="cart.php" method="post">


      <div class="size-container">
        <?php
        $sizes = ['Small', 'Medium', 'Large', 'X-large'];
        foreach ($sizes as $index => $size): ?>
          <label class="size<?= $index === 0 ? ' active' : ''; ?>">
            <input type="radio" name="size" value="<?= $size; ?>" <?= $index === 0 ? 'checked' : ''; ?>>
            <p><?= $size; ?></p>
          </label>
        <?php endforeach; ?>
      </div>
      <input type="hidden" name="id" value="<?= $row['id']; ?>">

      <!-- Buy Now Button -->
      <a href="./cart.php?id=<?= $row['id']; ?>"><button class="primary-btn buy">Buy Now</button"></a>
    </form>
    <!-- <div class="cart">
          <div class="count">
            <i class="bi bi-dash"></i>
            <p class="value">1</p>
            <i class="bi bi-plus"></i>
          </div> -->
    <!-- <a href="./cart.html">
            <div class="primary-btn buy">
              Buy Now
            </div>
          </a>
        </div> -->
    <!-- <p class="fs-25">Rs. 9999</p> -->

  </div>
</div>



<section class="also-like-section">
  <h2 class="section-title">You Might Also Like</h2>
  <div class="also-like-grid">
    <!-- Card 1 -->
    <div class="product-card">
      <img src="./images/look1.jpg" alt="Velvet Night Suit">
      <div class="product-info">
        <h3>Velvet Night Suit</h3>
        <p>Rs. 7,499</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="product-card">
      <img src="./images/look2.jpg" alt="Royal Blue Blazer">
      <div class="product-info">
        <h3>Royal Blue Blazer</h3>
        <p>Rs. 5,899</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="product-card">
      <img src="./images/look3.jpg" alt="Noir Street Jacket">
      <div class="product-info">
        <h3>Noir Street Jacket</h3>
        <p>Rs. 6,200</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="product-card">
      <img src="./images/look4.jpg" alt="Urban Midnight Coat">
      <div class="product-info">
        <h3>Urban Midnight Coat</h3>
        <p>Rs. 8,000</p>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="product-card">
      <img src="./images/look5.jpg" alt="Dark Aura Shirt">
      <div class="product-info">
        <h3>Dark Aura Shirt</h3>
        <p>Rs. 3,299</p>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="product-card">
      <img src="./images/look6.jpg" alt="Shadowline Suit">
      <div class="product-info">
        <h3>Shadowline Suit</h3>
        <p>Rs. 9,100</p>
      </div>
    </div>
  </div>
</section>


<!-- Rating and Review Section -->
<section class="rating-review">
  <h2 class="section-title">Customer Reviews for Noir Muse</h2>

  <div class="review-grid">
    <!-- Review 1 -->
    <div class="review-card">
      <div class="review-header">
        <h3><?php echo $name  ?></h3>
        <div class="stars">★★★★☆</div>
      </div>
      <p class="review-text">"Elegant and bold. Loved the material and finish!"</p>
      <div class="review-author">— Aisha K., <span class="date">June 2025</span></div>
    </div>

    <!-- Review 2 -->
    <div class="review-card">
      <div class="review-header">
        <h3><?php echo $name  ?></h3>
        <div class="stars">★★★★★</div>
      </div>
      <p class="review-text">"Perfect for a night out. The details are stunning!"</p>
      <div class="review-author">— Riya M., <span class="date">May 2025</span></div>
    </div>

    <!-- Review 3 -->
    <div class="review-card">
      <div class="review-header">
        <h3><?php echo $name  ?></h3>
        <div class="stars">★★★★☆</div>
      </div>
      <p class="review-text">"Received so many compliments! Premium feel."</p>
      <div class="review-author">— Sneha J., <span class="date">April 2025</span></div>
    </div>

    <!-- Review 4 -->
    <div class="review-card">
      <div class="review-header">
        <h3><?php echo $name  ?></h3>
        <div class="stars">★★★☆☆</div>
      </div>
      <p class="review-text">"Nice but delivery was delayed. Product is good."</p>
      <div class="review-author">— Divya S., <span class="date">March 2025</span></div>
    </div>
  </div>
</section>




</main>









<!-- footer -->


<footer class="footer">
  <div class="first-links link-container">
    <h2>Midnight Vouge</h2>
    <p>Where luxury meets darkness, and style finds its true expression.</p>
  </div>
  <div class="second-links link-container">
    <h2>Quick Links </h2>
    <ul>
      <li><a href="#">New Arrivals</a></li>
      <li><a href="#">Best Seller</a></li>
      <li><a href="#">Trending</a></li>
      <li><a href="#">Collections</a></li>
    </ul>
  </div>
  <div class="third-links link-container">
    <h2>Help</h2>
    <ul>
      <li><a href="#">Shipping</a></li>
      <li><a href="#">Returns</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="fourth-links link-container">
    <h2>Follow Us</h2>
    <ul>
      <li><a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/" target="_blank"><i
            class="bi bi-linkedin"></i></a></li>
      <li><a rel="noopener" href="https://www.instagram.com/___visw_a/" target="_blank"><i
            class="bi bi-instagram"></i></a></li>

      <li><a rel="noopener" href="https://www.behance.net/viswa28" target="_blank"><i class="bi  bi-behance"></i></a>
      </li>
    </ul>
  </div>

</footer>
<!-- <p class="author">Designed and Developed by <a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/" target="_blank">A.Viswa</a> copyright &copy; 2025</p> -->
<p class="author">Copyright &copy; 2025 Midnight Vouge | All Rights Reserved | Designed and Developed by <a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/"
    target="_blank">A.Viswa</a></p>







<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
<script src="./js/product.js"></script>
</body>

</html>