<?php
session_start();

if (isset($_SESSION['user_id'])) {

    $_SESSION = array();

    session_destroy();
    header("Location: index.html"); 
    exit();
} else {
    
    header("Location: index.html"); 
    exit();
}
?>s