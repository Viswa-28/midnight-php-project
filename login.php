<?php
session_start();
include('include/config.php');
include('include/head.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Prepare SQL query to check user credentials in the 'register' table
        $sql = "SELECT * FROM register WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);  // Binding parameters (email and password)
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Fetch user data
            $row = $result->fetch_assoc();

            $name = $row['username'];
            $role = $row['role'];
            $id = $row['id'];

            // Set session variables
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;

            // Redirect based on user role
            if ($role == "admin") {
                header("Location: sales.php");  // Admin dashboard
                exit();
            } else {
                header("Location: index.php");  // User homepage
                exit();
            }
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>

<!-- HTML Form -->
<div class="login-form">
    <form action="" method="post">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>

        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </form>
</div>
