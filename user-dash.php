<?php
include('include/config.php');
include('include/head.php');
?>

<div class="parent">
  <div class="sidebar">
    <ul>
      <li><a href="./sales.php">Sales</a></li>
      <li><a href="./trending-products.php">Trending</a></li>
      <li><a href="./user-dash.php">Users</a></li>
      <li><a href="./contact.php">Contact</a></li>
    </ul>
  </div>
        
  <div class="user-dash">
    <h1>Users</h1>
    <?php
    $query = "SELECT * FROM register";
    $result = $conn->query($query);
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['username']}</td>
                  <td>********</td> <!-- hide password for safety -->
                  <td>{$row['role']}</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
