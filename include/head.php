<?php
$page = basename($_SERVER['PHP_SELF']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midnight Vogue <?php
                        if ($page == 'index.php') {
                          echo 'Home';
                        } else if ($page == 'about.php') {
                          echo 'About';
                        } else if ($page == 'contact.php') {
                          echo 'Contact';
                        } else if ($page == 'dashboard.php') {
                          echo 'das';
                        }

                        ?></title>
  <!-- <link rel="shortcut icon" href=
   "./images/favicon.png" type="image/x-icon"> -->
  <link rel="shortcut icon" href="./images/favicon-suit.png" type="image/x-icon">
  <?php
  if ($page == 'index.php') {
    echo '<link rel="stylesheet" href="./css/style.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
  }
  elseif( $page == 'login.php')
  {
    echo '<link rel="stylesheet" href="./css/login.css">';
  }
  elseif ($page == 'noir.php') {
    echo '<link rel="stylesheet" href="./css/product.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
  } elseif ($page == 'cart.php') {
    echo '<link rel="stylesheet" href="./css/cart.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
  } elseif ($page == 'register.php') {
    echo '<link rel="stylesheet" href="./css/register.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
  } elseif (
    $page == 'dashboard.php' ||
    $page == 'trending.php' ||
    $page == 'trending-products.php' ||
    $page == 'add-product.php' ||
    $page == 'ubdate-product.php' ||
    $page == 'delete-product.php' ||
    $page == 'contact.php' ||
    $page == 'user-dash.php' ||
    $page == 'sales.php'
  ) {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
  }

  // elseif ($page == 'trending.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  // elseif ($page == 'trending-products.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  // elseif ($page == 'add-product.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  // elseif ($page == 'ubdate-product.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  // elseif ($page == 'delete-product.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  // elseif ($page == 'contact.php') {
  //     echo '<link rel="stylesheet" href="./css/dashboard.css">';
  // }
  ?>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="bg-dark">