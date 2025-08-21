<?php
include('include/config.php');
include('include/head.php');



$quary="SELECT * FROM messages";
$result=$conn->query($quary);


while($row=$result->fetch_assoc())
    {
        $name=$row['username'];
        $email=$row['email'];
        // $phone=$row['phone'];
        $message=$row['message'];


    }

?>

<div class="message-con">
    
    

</div>