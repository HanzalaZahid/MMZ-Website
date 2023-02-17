<?php
    session_start();
    if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] ==  true){
        
        $_SESSION['username']   =   $_COOKIE['username'];
        $_SESSION['loggedin']   =   $_COOKIE['loggedin'];

    }
    if (!isset($_SESSION['loggedin'])){
        header('Location: ./login.php?error=not_logged_in');
    }