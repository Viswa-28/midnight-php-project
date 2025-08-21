<?php
include('include/config.php');
include('include/head.php');



?>


<?php
include('include/navbar.php');
?>




<!-- banner -->

<div class="banner">
  <div class="banner-content">
    <h1>Discover the Midnight Elegance</h1>
    <p>Unveil the essence of elegance after dark. Midnight Vogue blends high fashion with the allure of midnight—where
      bold silhouettes, shimmering accents, and timeless style meet. Embrace the night. Own the spotlight.

    </p>
    <div class="btn-container">
      <a href="./Noir.html"> <button class="primary-btn">View Product</button></a>
    </div>
  </div>
  <div class="banner-image">
    <img src="./images/second-two.png" alt="Fashion Banner">


  </div>


</div>

<!-- banner-end -->

<section class="second" id="second">
  <h2 class="section-title">New Arrival</h2>
  <div class="card-container">


    <div class="card" style="background-image: url('./images/second-one.png');">
      <div class="overlay">
        <div class="image-name">Midnight Elegance</div>
      </div>
    </div>



    <div class="card" style="background-image: url('./images/second-two.png');">
      <div class="overlay">
        <div class="image-name">Noir Muse</div>
      </div>
    </div>



    <div class="card" style="background-image: url('./images/second-three.png');">
      <div class="overlay">
        <div class="image-name">Glam After Dark</div>
      </div>
    </div>

  </div>
</section>



<section class="third">
  <div class="tabs">
    <div class="btn men-btn secondary-btn active  ">Men</div>
    <div class="btn women-btn secondary-btn">Women</div>
  </div>

  <div class="tab-content">
    <div class="men-card  active">
      <div class="card ">
        <img src="./images/men-1.avif" alt="">
        <p>Black suit</p>


      </div>
      <div class="card active ">
        <img src="./images/men-2.avif" alt="">
        <p>Black shirt</p>
      </div>
      <div class="card active ">
        <img src="./images/men-3.avif" alt="">
        <p>black shoe</p>
      </div>
      <div class="card active ">
        <img src="./images/men-4.avif" alt="">
        <p>perfume</p>
      </div>
    </div>
    <div class="women-card ">
      <div class="card w-card">

        <img src="./images/women-1.png" alt="">
        <p>Black Dress</p>
      </div>
      <div class="card w-card">
        <img src="./images/women-2.png" alt="">
        <p> shoes</p>
      </div>
      <div class="card  w-card">
        <img src="./images/women-3.png" alt="">
        <p>Bag</p>
      </div>
      <div class="card w-card">
        <img src="./images/women-4.png" alt="">
        <p>Accessories</p>
      </div>
    </div>




  </div>




</section>



<section class="accordian">
  <h2 class="section-title">Frequently Asked Questions</h2>
  <div class="accordian-container">

    <div class="accordian-item ">
      <div class="question">
        <p>How do I find my size?</p>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer ">
        <p>We recommend measuring your bust, waist, and hips, then comparing those measurements with the chart. If
          you're between sizes, we suggest sizing up for a more comfortable fit. Still unsure? Contact our support
          team.</p>
      </div>
    </div>

    <div class="accordian-item">
      <div class="question">
        <p>Do you offer custom tailoring?</p>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p>Yes! Selected items offer custom size options. You’ll find a “Customize” option on eligible product pages. We also offer alterations in select locations..</p>
      </div>
    </div>
    <div class="accordian-item">
      <div class="question">
        <p>Can I return the dress if it doesn't fit?</p>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p>Yes, you can return the dress within 14 days of delivery, provided it is unused and in original condition
          with tags attached.</p>
      </div>
    </div>

  </div>
</section>

<?php

if (isset($_POST['submit'])) {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);
   $errors = [];

    // Username validation (only alphabets & underscore, 3–15 chars)
    if (empty($username)) {
        $errors['username'] = "Username is required.";
    } elseif (!preg_match("/^[a-zA-Z][a-zA-Z_]{2,14}$/", $username)) {
        $errors['username'] = "Enter a valid username (3-15 chars, letters & underscore only).";
    }

    // Email validation
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Enter a valid email address.";
    }

    // Message validation
    if (empty($message)) {
        $errors['message'] = "Message is required.";
    } elseif (strlen($message) < 5) {
        $errors['message'] = "Message must be at least 5 characters.";
    }

    // If no errors → success
    if (empty($errors)) {
        // Example: store in DB or send email
        echo json_encode([
            "status" => "success",
            "message" => "Form submitted successfully!"
        ]);
    } else {
        // Return errors as JSON
        echo json_encode([
            "status" => "error",
            "errors" => $errors
        ]);
    }

  // $sql = "INSERT INTO messages (username, email, message) VALUES ('$name', '$email', '$message')";
  $sql = "INSERT INTO messages ( `username`, `email`, `message` ) VALUES ('$name','$email','$message')";
  // echo "<script>alert('" . $sql . "');</script>";
  // $result = $conn->query($sql);   
  $result=mysqli_query($conn,$sql);   
  if($result){
    echo "<script>alert('Message sent successfully.');</script>";
  }
}

?>


<form id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <h2 class="section-title" id="contact">Contact</h2>
  <input type="text" class="username" placeholder="Username" name="name">
  <span class="error username-error"></span>

  <input type="email" class="email" placeholder="Email" name="email">
  <span class="error email-error"></span>

  <textarea class="message" placeholder="Your Message" name="message"></textarea>
  <span class="error message-error"></span>

  <button type="submit" class="form-btn" name="submit">Submit</button>
</form>



<!-- footer -->


<footer class="footer">
  <div class="first-links link-container">
    <h2>Midnight Vouge</h2>
    <p>Where luxury meets darkness, and style finds its true expression.</p>
  </div>
  <div class="second-links link-container">
    <h2>Quick Links</h2>
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
<p class="author">Copyright &copy; 2025 Midnight Vouge | All Rights Reserved | Designed and Developed by <a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/"
    target="_blank">A.Viswa</a></p>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
<script src="./js/script.js"></script>
</body>

</html>