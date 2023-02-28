<?php
require_once "./classes/Controllers/transactionController.php";
include "./includes/message_helper.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header_nav.css">
    <link rel="stylesheet" href="./assets/css/add_transaction.css">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/add_transaction.js?version=1" defer></script>
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- plugins -->
    <script src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>


</head>
<body>
    <?php
    include "./includes/header_nav.php";
    ?>
    <div class="body">
        <div class="main_container">
            <div class="card">
                <div class="head">
                    <h2 class="titile">Add Account</h2>
                </div>
                <div class="wrapper">
                    <form action="./classes/controllers/transactionController.php" method="post" class="add_account_form grid">
                        <div class="form_group">
                            <div class="label">Bank Name</div>
                            <select name="pakistan_bank_list" id="" required>
                                <option value="">--Select Bank--</option>
                                <?php
                                
                                $controller =   new TransactionController();
                                $bank_list  =   $controller->getBankList();

                                foreach($bank_list as $list)
                                {
                                    $name   =   $list['bank_name'];
                                    $name   =   str_replace('(', '', $name);
                                    $name   =   str_replace(')', ' - ', $name);
                                    $id   =   $list['bank_id'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }


                                ?>
                            </select>
                        </div>
                        <div class="form_group">
                            <div class="label">Title</div>
                            <input required type="text" name="bank_account_title" id="" placeholder="Account Title">
                        </div>
                        <div class="form_group">
                            <div class="label">Account Number</div>
                            <input type="text" required name="bank_account_number" id="" placeholder="Account Number">
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                        <div class="form_group">
                            <input class="primary_button" name="bank_account_submit" type="submit" value="Add Account">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>