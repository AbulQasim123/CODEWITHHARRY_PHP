<?php 
    echo "<h2>Get Session in php</h2>"; 
    session_start();
    if (isset($_SESSION['username'])) {
        echo "Welcome ". $_SESSION['username']. "<br>";
        echo "Your Hobby is ". $_SESSION['hobby'];
    }else{
        echo "Please login to continue";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>