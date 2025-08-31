<?php
include('include/head.php');
include('include/config.php');
?>
<body>
   
<?php
  // check if form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $role = $_POST['role'];

    // validation logic here
    if ($username && $email && $password && $confirmPassword && $role) {
      if ($password === $confirmPassword) {
        // hash password
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // insert data into database
        $sql = "INSERT INTO register (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        if (mysqli_query($conn, $sql)) {
          echo "Registration successful!";
          header("Location: login.php");
        } else {
          echo "Error: " . mysqli_error($conn);
        }
      } else {
        echo "Passwords do not match";
      }
    } else {
      echo "Please fill all the fields";
    }
  }
?>
    
<main>
<form action="register.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <label for="confirm-password">Confirm Password:</label>
  <input type="password" id="confirm-password" name="confirm-password"><br><br>
  <label for="role">Role:</label>
  <select id="role" name="role">
    <option value="user">User</option>
    <option value="admin">Admin</option>
  </select><br><br>
  <input type="submit" value="Register">

  <p>Already have an account? <a href="login.php">Login here</a>.</p>
</form>
</main>

</body>
</html>