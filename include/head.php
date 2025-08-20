<?php
$page=basename($_SERVER['PHP_SELF']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midnight Vogue <?php
  if($page=='index.php')
  {
    echo 'Home';
  }
  else if($page=='about.php')
  {
    echo 'About';
  }
  else if($page=='contact.php')
  {
    echo 'Contact';
  }
  else if($page=='dashboard.php')
  {
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
} elseif ($page == 'register.php') {
    echo '<link rel="stylesheet" href="./css/register.css">';
     echo '<link rel="stylesheet" href="./css/common.css">';
} elseif ($page == 'login.php') {
    echo '<link rel="stylesheet" href="./css/style.css">';
}
elseif ($page == 'dashboard.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
elseif ($page == 'trending.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
elseif ($page == 'trending-products.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
elseif ($page == 'add-product.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
?>

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
 