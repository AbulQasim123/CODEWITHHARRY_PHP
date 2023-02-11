<?php 
    $server_name='localhost';
    $user_name= 'root';
    $pass_word= '';
    $db_name= 'codewith_harry';
    $conn = mysqli_connect($server_name, $user_name, $pass_word,$db_name);

    if (!$conn) {
        die('Sorry! we failed to connect'. mysqli_error($conn));
    }
    //else{
    //     echo "Connection was successful";
    // }
    // $query= " CREATE TABLE `Qasim` "; // CREATE DATABASE SQL COMMAND
    // $query= "INSERT INTO `student_record` (`Name`, `Email`, `City`) VALUES ('Abutalib', 'talib@gmail.com', 'Mumbai')"; // INSERT RECORD SQL COMMAND
    // $result= mysql_query($query, $conn);
    // if ($result) {
    //     echo "The Record has been inserted successfully";
    // }else{
    //     echo "The Record was not inserted successfully because of this error". mysql_error($conn);
    // }
?>