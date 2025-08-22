<?php
include('include/config.php');
include('include/head.php');





?>
<div class="parent">
    <div class="sidebar">
<ul>
<ul>
  <li><a href="./dashboard.php">Sales </a></li>
  <li><a href="./trending-products.php">trending</a></li>
  <li><a href="./contact.php">contact</a></li>
  <li><a href="">Sales 4</a></li>
</ul>


</ul>
</div>

<div class="contact-dash">

<?php
$quary="SELECT * FROM messages";
$result=$conn->query($quary);


while($row=$result->fetch_assoc())
    {
        $name=$row['username'];
        $email=$row['email'];
        // $phone=$row['phone'];
        $message=$row['message'];


        echo "
        <div class='message'>
        <h2>$name</h2>
        <p>$email</p>
        <p>$message</p>
        </div>
        ";


    }
?>

</div>




</div>

