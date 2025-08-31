<?php
$page=basename($_SERVER['PHP_SELF']);
session_start();

?>




<header>
    <div class="nav">
      <h2 class="fs-25">Midnight Vouge</h2>
      <ul class="links">
      <?php
if($page=='index.php'){
  ?>
   <li><a href="#">Home</a></li>
        <li><a href="#second">New Arrivals</a></li>
        <li><a href="#third">categories</a></li>
        <li><a href="#contact">Contact</a></li><?php
}
else if($page=='noir.php'){
  ?>
  <li><a href="./index.php">Home</a></li>
        <li><a href="./index.php">New Arrivals</a></li>
        <li><a href="./index.php">categories</a></li>
        <li><a href="./index.php">Contact</a></li>
  <?php
  
}
elseif($page=='cart.php'){
  ?>
  <li><a href="./index.php">Home</a></li>
        <li><a href="./index.php">New Arrivals</a></li>
        <li><a href="./index.php">categories</a></li>
        <li><a href="./index.php">Contact</a></li>
  <?php
}
?>
      </ul>
      <div class="right-icons">
        <div class="hamburger-icon">
          <i class="bi bi-list"></i>
        </div>
      </div>
      <div class="icon-container">
        <i class="bi bi-search"></i>
        <i class="bi bi-bag"></i>
       <?php
       if(isset($_SESSION['email'])){
        ?>
        <a href="./logout.php">
          <a href="./logout.php">
         <div class="primary-btn signup">
          logout
        </div>
       </a>
        </i></a>
        <?php

       }
       else{
        ?>
        <a href="login.php"><a href="./login.php">
         <div class="primary-btn signup">
          Login
        </div>
       </a></a>
        <?php
       }


?>
      </div>
    </div>
  </header>