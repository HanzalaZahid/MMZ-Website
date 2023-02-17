<?php
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION);
    session_destroy();
    setcookie('username', $_SESSION['username'], time()-(86400 * 30), "/");
    setcookie('loggedin', true, time()-(86400 * 30), "/");
    header('Location: ../login.php');