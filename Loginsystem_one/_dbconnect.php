<?php 
    $server_name= 'localhost';
    $user_name= 'root';
    $pass_word= '';
    $database_name= 'codewith_harry';
    $conn= mysqli_connect($server_name, $user_name, $pass_word, $database_name);
    
    
    if (!$conn) {
        die('Error' . mysqli_error($conn));
    }
    // else{
    //     echo 'Connection was successful';
    // }
?>