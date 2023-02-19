<?php
    include "./includes/class_loader.inc.php";
    include "./includes/message_helper.inc.php";
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header_nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/signup.css">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- plugins -->
    <script src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   
    
</head>
<body>
    <div class="body">
        <?php
        include "./includes/header_nav.php"
        ?>
        <div class="main_container">
            <div class="card">
                <div class="head">
                    <h2 class="titile">Add USER</h2>
                </div>
                <div class="wrapper">
                    <form action="./classes/Controllers/userController.php" method="post" class="grid">
                        <div class="form_group">
                            <div class="label">Firstname: </div>
                            <input type="text" name="firstname" id="" placeholder="FIrstname" required>
                        </div>
                        <div class="form_group">
                            <div class="label">Lastname: </div>
                            <input type="text" name="lastname" id="" placeholder="Lastname" required>
                        </div>
                        <div class="form_group">
                            <div class="label">Email: </div>
                            <input type="email" name="email" id="" placeholder="Email" required>
                        </div>
                        <div class="form_group">
                            <div class="label">Password: </div>
                            <input type="password" name="password" id="" placeholder="Password" required>
                        </div>
                        <div class="form_group">
                            <div class="label">Confirm Password: </div>
                            <input type="password" name="confirm_password" id="" placeholder="Password" required>
                        </div>
                        <div class="form_group">
                            <input class="primary_button" name="signupsubmit" type="submit" value="Add User">
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>