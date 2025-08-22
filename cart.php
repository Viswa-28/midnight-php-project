<?php
include('include/config.php');
include('include/head.php');
include('include/navbar.php');

// if (isset($_POST['submit'])) {

//     $name = $_POST['name'];
//     $price = $_POST['price'];   
//     $size=$_POST['size'];
   
// }
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tproduct WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
    $size = $_GET['size'];
}

?>
        <div class="breadcrumb">
            <a href="./Noir.php?id=<?php echo $id ?>" class="home-link">
                <?php
                echo $name
                ?>
            </a>
            <span class="separator">/</span>
            <span class="current-page">Cart</span>
        </div>
        <div class="cart">
            <div class="cart-container">
                <div class="cart-header">
                    <h2>Cart</h2>
                </div>
                <div class="cart-body">
                    <div class="cart-left">
                        <div class="cart-item">
                            <img src="<?php echo $image ?>" alt="">
                            <div class="cart-details">
                                <h3><?php echo $name ?></h3>
                                <p>Size : <?php echo $size ?></p>
                                <p>Color : Black</p>

                                <h5 class="total-amount">Rs. 2000</h5>
                            </div>

                        </div>
                        <div class="cart-count">
                            <i class="bi bi-trash"></i>
                            <div class="count">
                                <i class="bi bi-dash"></i>
                                <p>1</p>
                                <i class="bi bi-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cart-right">
                        <div class="order-summary">
                            <h2>Order Summary</h2>
                            <div class="summary-row">
                                <p>Subtotal</p>
                                <p class="Subtotal"><?php echo $price ?></p>
                            </div>
                            <div class="summary-row">
                                <p>Shipping</p>
                                <p>Free</p>
                            </div>
                            <div class="summary-row Discount">
                                <p>Discount</p>
                                <p>- Rs. 500</p>
                            </div>
                            <hr>
                            <div class="summary-row total">
                                <p>Total</p>
                                <p class="total-val">Rs. 2000</p>
                            </div>
                            <div class="promo">
                                <input type="text" placeholder=" Apply First500 " value="First500">
                                <button class="primary-btn">Apply</button>
                            </div>
                            <button class="primary-btn checkout-btn">Checkout</button>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="checkout">
            <h1>Order successful</h1>
            <p>Thank you for your order! Your items will be shipped soon.</p>
            <div class="btn-container">
                <a href="./index.html">
                    <button class="primary-btn">Continue Shopping</button>
                </a>
        </div>

    </main>













    <!-- footer -->


    <footer class="footer">
        <div class="first-links">
            <h2>Midnight Vouge</h2>
            <p>Where luxury meets darkness, and style finds its true expression.</p>
        </div>
        <div class="second-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">Best Seller</a></li>
                <li><a href="#">Trending</a></li>
                <li><a href="#">Collections</a></li>
            </ul>
        </div>
        <div class="third-links">
            <h2>Help</h2>
            <ul>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="fourth-links">
            <h2>Follow Us</h2>
            <ul>
                <li><a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                <li><a rel="noopener" href="https://www.instagram.com/___visw_a/" target="_blank"><i class="bi bi-instagram"></i></a></li>
               
                <li><a rel="noopener" href="https://www.behance.net/viswa28" target="_blank"><i class="bi  bi-behance"></i></a></li>
            </ul>
        </div>

        
    </footer>
   
     <p class="author">Copyright &copy; 2025 Midnight Vouge | All Rights Reserved | Designed and Developed by <a rel="noopener" href="https://www.linkedin.com/in/viswa-a-3122532b1/"
      target="_blank">A.Viswa</a></p>







    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>