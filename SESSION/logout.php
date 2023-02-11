<?php 
    echo "<h2>Unset\Destroy Logout Session in php</h2>"; 
    session_start();
    session_unset();
    session_destroy();
?>