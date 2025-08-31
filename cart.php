<?php
include('include/config.php');
include('include/head.php');
include('include/navbar.php');

session_start(); // Ensure that the session is started to capture user ID

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userId = $_SESSION['user_id']; // Get the logged-in user's ID

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $size = isset($_GET['size']) ? $_GET['size'] : 'Not selected';  // Check if size is selected
    $query = "SELECT * FROM tproduct WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
}

if (isset($_POST['checkout'])) {
    $productId = $_POST['product_id'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $totalAmount = $price * $quantity;
    $quary="INSERT INTO sales ( product_id, quantity, price, total_amount, size) VALUES ( $productId, $quantity, $price, $totalAmount, '$size')";
    // echo "<h1>".$quary."</h1>";
    $result=mysqli_query($conn,$quary);
    header("Location: index.php");
}
?>
    <div class="breadcrumb">
        <a href="./noir.php?id=<?php echo $id ?>" class="home-link"><?php echo $name ?></a>
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
                        <img src="<?php echo $image ?>" alt="Product Image">
                        <div class="cart-details">
                            <h3><?php echo $name ?></h3>
                            <p>Size: <?php echo $size ?></p>
                            <p>Color: Black</p>
                            <h5 class="total-amount">Rs. <?php echo $price ?></h5>
                        </div>
                    </div>
                    <div class="cart-count">
                        <i class="bi bi-trash"></i>
                        <div class="count">
                            <i class="bi bi-dash"></i>

                            <p>1</p>
                             <?php    
                            $counter=isset($_POST['counter'])?$counter:1;
                             ?>
                        
                            <input class="quantity" type="hidden" name="counter" id="" value="<?= $counter; ?>">

                            <i class="bi bi-plus"></i>
                        </div>
                    </div>
                </div>
                
                <div class="cart-right">
                    <div class="order-summary">
                        <h2>Order Summary</h2>
                        <div class="summary-row">
                            <p>Subtotal</p>
                            <!-- <p id="updatedValue">Subtotal</p> -->
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
                            <p class="total-val">Rs. <?php echo $price - 500; ?></p>  <!-- Total after discount -->
                        </div>
                        <div class="promo">
                            <input type="text" placeholder="Apply First500">
                            <button class="primary-btn">Apply</button>
                        </div>
                        
                        <!-- Checkout Form -->
                        <form action=" " method="post">
                            <input type="hidden" name="quantity" id="updatedValue" value="1">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            <input type="hidden" name="price" value="<?php echo $price; ?>">
                            <input type="hidden" name="size" value="<?php echo $size; ?>">
                            <button class="primary-btn checkout-btn" type="submit" name="checkout">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php


include('include/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
<script src="./js/cart.js"></script>
</body>
</html>
