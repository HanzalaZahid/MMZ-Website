<?php
require_once "./classes/Controllers/transactionController.php";
require_once "./classes/Controllers/projectController.php";
include "./includes/message_helper.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction</title>
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
    <script src="./assets/js/behaviour/add_transaction.js?<?php echo 'v='.time(); ?>" defer></script>
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
                    <h2 class="titile">Add Transaction</h2>
                </div>
                <div class="wrapper">
                    <form action="" class="transaction_type_form flex">
                        <span class="label">Choose Transaction Type</span>
                        <ul class="row_flex">
                            <li><button type="button" class="primary_button_nofill checked bank_transfer_button" type="submit">Bank Transfer</button></li>
                            <li><button type="button" class="primary_button_nofill withdrawal_button" type="submit">Withdrawal</button></li>
                            <li><button type="button" class="primary_button_nofill other_button" type="submit">Other</button></li>
                        </ul>
                    </form>
                    <form action="./classes/controllers/transactionController.php" method="post" class="add_transaction_form bank_transfer_form grid">
                        <div class="form_group">
                            <div class="label">Account Used</div>
                            <select name="transaction_account_used" id="" required>
                                <option value="">--Select Account--</option>
                                <?php
                                
                                $controller =   new TransactionController();
                                $account_list  =   $controller->getAllAccounts();

                                foreach($account_list as $list)
                                {
                                    $name   =   $list['bank_name']." - ".strtoupper($list['account_title'])." - ".$list['account_number'];
                                    $id   =   $list['account_id'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }


                                ?>
                            </select>
                        </div>
                        <div class="form_group">
                            <div class="label">Select Date</div>
                            <input type="date" name="transaction_date" id="" class="date">
                        </div>
                        <div class="form_group">
                            <div class="label">Beneficiary Name</div>
                            <select name="transaction_beneficiary" id="">
                                <option value="">--Select Beneficiary--</option>
                                <?php 
                                $controller =   new TransactionController();
                                $beneficiaries_list =   $controller->getAllBeneficiaries();

                                foreach($beneficiaries_list as $list){
                                    $id     =   $list['beneficiary_id'];
                                    $name   =   $list['beneficiary_name']." - ".$list['beneficiary_about']." - ".$list['designation_name']." - ".$list['bank_name']." - ".$list['beneficiary_account_number'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <a href="./add_beneficiary.html" target="_blank" class=" button secondary_button">Add New</a>
                        </div>
                        <div class="form_group">
                            <div class="label">Amount (Rs.)</div>
                            <input type="number" name="transaction_amount"  id="" class="transaction_amount" placeholder="Amount (Rs.)">
                        </div>
                        <div class="form_group">
                            <div class="label">Project Name</div>
                            <select name="transaction_project" id="">
                                <option value="">--Select Project--</option>
                                <?php 
                                $controller =   new ProjectController();
                                $project_list =   $controller->getProjects();

                                foreach($project_list as $list){
                                    $id     =   $list['project_id'];
                                    $name   =   $list['project_name'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <a href="./add_project.html" target="_blank" class=" button secondary_button">Add New</a>
                        </div>
                        <div class="form_group">
                            <div class="label">Catagory</div>
                            <div class="catagory_group">
                                <input type="radio" value="purchase" name="transaction_catagory" id="bank_transfer_purchase" class="catagory">
                            <label class="radio_button" for="bank_transfer_purchase">
                                <i class="bi bi-cart"></i>
                                <span>Purchase</span>
                            </label>
                            <input type="radio" value="service" name="transaction_catagory" id="bank_transfer_services" class="catagory">
                            <label class="radio_button"for="bank_transfer_services">
                                <i class="bi bi-tools"></i>
                                <span>Service</span>
                            </label>
                            <input type="radio" value="others" checked name="transaction_catagory" id="bank_transfer_others" class="catagory">
                            <label class="radio_button" for="bank_transfer_others">
                                <i class="bi bi-asterisk"></i>
                                <span>Others</span>
                            </label>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label">Purpose</div>
                            <input type="text" name="transaction_purpose" id="" placeholder="Purpose of Transaction">
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                        <div class="form_group">
                            <input class="primary_button" name="bank_transfer_submit" type="submit" value="Add Transaction">
                        </div>
                    </form>
                    <form action="./classes/controllers/transactionController.php" method="post" class="add_transaction_form withdrawal_form hidden grid">
                        <div class="form_group">
                            <div class="label">Date</div>
                            <input type="Date" name="transaction_date" id="" placeholder="Select Date">
                        </div>
                        <div class="form_group">
                            <div class="label">Account Used</div>
                            <select name="transaction_account_used" id="" required>
                                <option value="">--Select Account--</option>
                                <?php
                                
                                $controller =   new TransactionController();
                                $account_list  =   $controller->getAllAccounts();

                                foreach($account_list as $list)
                                {
                                    $name   =   $list['bank_name']." - ".strtoupper($list['account_title'])." - ".$list['account_number'];
                                    $id   =   $list['account_id'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php
                                }


                                ?>
                            </select>
                        </div>
                        <div class="form_group amount_group">
                            <div class="label">Amount (Rs.)</div>
                            <div class="amount_field_container input_container">
                                <input type="number" name="withdrawal_amount[]" id="" placeholder="Amount (Rs.)">
                            </div>
                            <button type="button" class="primary_button button_generator new_details_generator amount_field_generator"><i class="bi bi-plus-lg"></i></button>
                        </div>
                        <div class="details_array">
                            <div class="regenerate_details grid">
                                <h3 class="title">Details 1</h3>
                            
                                <div class="form_group">
                                    <div class="label">Amount</div>
                                    <input type="number" name="cash_amount[]" id="" placeholder="Amount (Rs.)">
                                </div>
                                <div class="form_group">
                                    <div class="label">Beneficiary Name</div>
                                    <select name="withdrawal_beneficiary[]" id="">
                                        <option value="">--Select Beneficiary--</option>
                                        <?php 
                                        $controller =   new TransactionController();
                                        $beneficiaries_list =   $controller->getAllBeneficiaries();

                                        foreach($beneficiaries_list as $list){
                                            $id     =   $list['beneficiary_id'];
                                            $name   =   $list['beneficiary_name']." - ".$list['beneficiary_about']." - ".$list['designation_name']." - ".$list['bank_name']." - ".$list['beneficiary_account_number'];
                                            ?>
                                            <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <a href="./add_beneficiary.php" target="_blank" class=" button secondary_button">Add New</a>
                                </div>
                                <div class="form_group">
                                    <div class="label">Project Name</div>
                                    <select name="withdrawal_project[]" id="">
                                        <option value="0">--Select Project--</option>
                                        <?php 
                                        $controller =   new ProjectController();
                                        $project_list =   $controller->getProjects();

                                        foreach($project_list as $list){
                                            $id     =   $list['project_id'];
                                            $name   =   $list['project_name'];
                                            ?>
                                            <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <a href="./add_project.php" target="_blank" class=" button secondary_button">Add New</a>
                                </div>
                                <div class="form_group">
                                    <div class="label">Catagory</div>
                                    <div class="catagory_group">
                                        <input type="radio" name="withdrawal_transaction_catagory[0]" value="purchase" id="withdrawal_form_purchase0" class="catagory">
                                        <label class="radio_button" for="withdrawal_form_purchase0">
                                            <i class="bi bi-cart"></i>
                                            <span>Purchase</span>
                                        </label>
                                        <input type="radio" name="withdrawal_transaction_catagory[0]" value="service" id="withdrawal_form_services0" class="catagory">
                                        <label class="radio_button" for="withdrawal_form_services0">
                                            <i class="bi bi-tools"></i>
                                            <span>Service</span>
                                        </label>
                                        <input type="radio" checked name="withdrawal_transaction_catagory[0]" value="others" id="withdrawal_form_others0" class="catagory other_radio">
                                        <label class="radio_button" for="withdrawal_form_others0">
                                            <i class="bi bi-asterisk"></i>
                                            <span>Others</span>
                                        </label>
                                    </div>
                                    <a href="./add_transaction_catagory.html" target="_blank" class=" button secondary_button">Add New</a>
                                </div>
                                <div class="form_group">
                                    <div class="label">Purpose</div>
                                    <input type="text" name="withdrawal_purpose[]" id="" placeholder="Purpose of Transaction">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label"></div>
                            <button type="button" class="primary_button button_generator new_details_generator transaction_details_generator"><i class="bi bi-plus-lg"></i></button>
                        </div>
                        <div class="form_group">
                            <p class="php_form_error"><?php echo $message ?></p>
                        </div>
                        <div class="form_group">
                            <input name="withdrawal_submit" class="primary_button" type="submit" value="Add Transaction">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>