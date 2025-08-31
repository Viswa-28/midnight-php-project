




<!-- ✅ Hamburger toggle -->
<input type="checkbox" id="menu-toggle">
<label for="menu-toggle" class="hamburger">&#9776;</label>

<div class="sidebar">
    <ul>
        <li><a href="sales.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'sales.php') echo 'active'; ?>">Sales</a></li>
        <li><a href="trending-products.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'trending-products.php') echo 'active'; ?>">Trending</a></li>
        <li><a href="user-dash.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'user-dash.php') echo 'active'; ?>">Users</a></li>
        <li><a href="contact.php" class="<?php if (basename($_SERVER['PHP_SELF']) === 'contact.php') echo 'active'; ?>">Contact</a></li>
    </ul>
</div>

<div class="content">
    <h1>Dashboard Content</h1>
</div>
