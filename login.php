<?php
session_start();
include('include/config.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {  
        $error = "Please fill in all fields.";
    } else {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        // mysqli_stmt_bind_param($stmt, "s", $email);
        // mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                // Successful login
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = $row["role"];

                if ($row["role"] == "admin") {
                    header("Location: dashboard.php");
                    exit();
                } else {
                    header("Location: index.php");
                    exit();
                }
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Email does not exist.";
        }
    }
}
mysqli_close($conn);
?>
<?php include('include/head.php'); ?> <!-- include AFTER PHP logic -->

<div class="login-form">
  <h2>Login</h2>

  <!-- Show error if exists -->
  <?php if (!empty($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Login</button>
  </form>
  
  <p>Don't have an account? <a href="register.php">Sign up</a></p>
  <p>Continue as guest <a href="index.php">Continue</a></p>
</div>
