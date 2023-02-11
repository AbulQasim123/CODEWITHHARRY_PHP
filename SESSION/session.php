<?php 
    echo "<h2>Set Session in php</h2>"; 
    session_start();
    $_SESSION['username']= 'Abulqasim';
    $_SESSION['hobby']= 'Cricket';
    echo "we have saved your session";
   
?>