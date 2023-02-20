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
    <title>Add Beneficiary</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header_nav.css">
    <link rel="stylesheet" href="./assets/css/add_beneficiary.css">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/add_beneficairy.js" defer></script>
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- Plugins -->
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
                    <h2 class="titile">Add Beneficiary</h2>
                </div>
                <div class="wrapper">
                    <form action="./classes/Controllers/transactionController.php" method="post" class="add_beneficiary_form grid">
                        <div class="form_group">
                            <div class="label">Name</div>
                            <input type="text" name="beneficiary_name" id="" placeholder="Full name of Beneficiary">
                        </div>
                        <div class="form_group">
                            <div class="label">Bank</div>
                            <select name="pakistan_bank_list" id="">
                                <option value="">--Select Bank--</option>
                                <?php
                                
                                $controller =   new TransactionController();
                                $bank_list  =   $controller->getBankList();

                                foreach($bank_list as $list)
                                {
                                    $name   =   $list['bank_name'];
                                    $id   =   $list['bank_id'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }


                                ?>
                            </select>
                        </div>
                        <div class="form_group">
                            <div class="label">Account Number</div>
                            <input type="text" name="account_number" id="" placeholder="Account Number">
                        </div>
                        <div class="form_group about_beneficiary_group">
                            <div class="label">About Beneficiary</div>
                            <input type="text" name="beneficiary_about" id="" placeholder="About Beneficiary">
                        </div>
                        <div class="form_group">
                            <div class="label">Is this Beneficiary your employee?</div>
                            <input type="checkbox" class="beneficiary_checkbox" value="1" name="beneficiary_checkbox" id="">
                            <p>Check the box if your Beneficiary is also your employee</p>
                        </div>
                        <div class="form_group toggle_group hidden">
                            <div class="label">Designation</div>
                            <select name="employee_designation_select" id="">
                                <option value="">--Select Designation--</option>
                                <?php
                                $designation_list  =   $controller->getAllDesignations();
                                // var_dump($designation_list);
                                foreach($designation_list as $list)
                                {
                                    $name   =   $list['designation_name'];
                                    $id   =   $list['designation_id'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo ucwords(strtolower($name)) ?></option>
                                    <?php
                                }


                                ?>
                            </select>
                            <a href="./add_designation.php" target="_blank" class="secondary_button button">Add New</a>
                            <label id="employee_designation_select-error" class="error" for="employee_designation_select"></label>
                        </div>
                        <div class="form_group toggle_group hidden">
                            <div class="label">Mobile Number </div>
                            <input type="text" name="employee_mobile" id="" placeholder="Mobile Number">
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                        <div class="form_group">
                            <input type="submit" name="add_beneficiary_submit" class="primary_button" value="Add Beneficary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>