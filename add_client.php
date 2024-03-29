<?php
    include "./includes/message_helper.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/header_nav.css">
    <link rel="stylesheet" href="./assets/css/add_client.css">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- PLUGINS -->
    <script src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>


</head>
<body>
<?php include "./includes/header_nav.php";?>
    <div class="body">
        <div class="main_container">
            <div class="card">
                <div class="head">
                    <h2 class="titile">Add Client</h2>
                </div>
                <div class="wrapper">
                    <form action="./classes/controllers/clientController.php" method="post" class="add_client_form grid">
                        <div class="form_group">
                            <div class="label">Client Name</div>
                            <input type="text" name="client_name" id="" placeholder="Client Name">
                        </div>
                        <div class="form_group">
                            <div class="label">Client Type</div>
                            <input type="radio" name="client_type_radio" value="0" id="private_client_radio">
                            <label for="private_client_radio">Private</label>
                            <input type="radio" name="client_type_radio" value="1" id="company_client_radio">
                            <label for="company_client_radio">Company</label>
                            <label id="client_type_radio-error" class="error" for="client_type_radio"></label>
                        </div>
                        <div class="form_group">
                            <div class="label">Client Address</div>
                            <input type="text" name="client_address" id="" placeholder="Client Address">
                        </div>
                        <div class="form_group">
                            <div class="label">Client Mobile</div>
                            <input type="text" name="client_mobile" id="" placeholder="Client Mobile">
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                        <div class="form_group">
                            <input type="submit" class="primary_button" name="client_submit" id="" value="Add Client">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>