<?php
    include "./includes/class_loader.inc.php";

    if (isset($_SESSION['loggedin'])){
        header('Location: ./index.php');
    }
    if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] ==  true){
        
        $_SESSION['username']   =   $_COOKIE['username'];
        $_SESSION['loggedin']   =   $_COOKIE['loggedin'];
        header('Location: ./index.php');
    }

    $error  =   "";
    if (isset($_REQUEST['error']))
    {
        if($_REQUEST['error']  ==  "wrong_credential")
        {
            $error  =   "Wrong Email or Password";
        }
        if($_REQUEST['error']  ==  "user_not_found")
        {
            $error  =   "User not found";
        }
        if($_REQUEST['error']  ==  "not_logged_in")
        {
            $error  =   "Please Log In First";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- PLUGINS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

</head>
<body>
    <form action="./classes/Controllers/userController.php" method="post" class="admin_login_form">
        <div class="logo">
            <img src="./assets/images/white_logo.png" alt="MMZ Interiors Logo">
        </div>
        <input type="email" placeholder="Enter Email" name="user_email" required>
        <input type="password" placeholder="Enter Password" name="user_password" required>
        <span>
        <input type="checkbox" name="rememberme" id="rememberme">
        <label for="rememberme" value="1">Stay Logged In</label>
        </span>
        <input type="submit" value="Login" class="button" name="loginsubmit">
        <p class="error"><?php echo $error?></p>
    </form>
</body>
</html>