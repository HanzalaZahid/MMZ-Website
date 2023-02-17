<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header_nav.css">
    <link rel="stylesheet" href="./assets/css/add_project.css">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/add_project.js" defer></script>
    <script src="./assets/js/behaviour/validateForm.js" defer></script>
    <!-- Plugins -->
    <script src="./assets/plugins/jquery.steps/dist/jquery-steps.min.js"></script>
    <script src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="./assets/plugins/jquery.steps/dist/jquery-steps.css">


</head>
<body>
    <?php include "./includes/header_nav.php";?>
    <div class="body">
        <div class="main_container">
            <div class="card">
                <div class="head">
                    <h2 class="titile">Add Project</h2>
                </div>
                <div class="wrapper">
                    <form action="" class="add_Project_form grid">                
                        <div class="step-app" id="demo">
                            <ul class="step-steps">
                            <li data-step-target="step1">Project Information</li>
                            <li data-step-target="step2">Project Team</li>
                            </ul>
                            <div class="step-content">
                            <div class="step-tab-panel" data-step="step1">
                                <div class="grid form">
                                    <div class="form_group">
                                        <div class="label">Select Client</div>
                                        <select name="select_client" id="">
                                            <option value="">--Select Client--</option>
                                            <option value="1">NDURE</option>
                                            <option value="2">SERVIS</option>
                                        </select>
                                        <a href="./add_client.html" target="_blank" class=" button secondary_button">Add New</a>
                                    </div>
                                    <div class="form_group">
                                        <div class="label">Select Province</div>
                                        <select name="select_province" id="">
                                            <option value="">--Select Province--</option>
                                            <option value="1">Punjab</option>
                                            <option value="2">Sindh</option>
                                            <option value="3">Khyber Pakhtunkhwa</option>
                                            <option value="4">Balouchistan</option>
                                            <option value="4">Islamabad/Capital</option>
                                            <option value="4">Gilgit Baltistan</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <div class="label">Select City</div>
                                        <select name="select_city" id="">
                                            <option value="0">--Select City--</option>
                                            <option value="1">Sargodha</option>
                                            <option value="2">Karachi</option>
                                            <option value="3">Lahore</option>
                                            <option value="4">Faisalabad</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <div class="label">Start Date</div>
                                        <input type="date" name="project_start_date" id="">
                                    </div>
                                    <div class="form_group">
                                        <div class="label">End Date</div>
                                        <input type="date" name="project_end_date" id="">
                                    </div>
                                    <div class="form_group">
                                        <div class="label">Total Days to Complete Project</div>
                                        <input type="number" name="project_days" id="" placeholder="Total Days to Complete Project">
                                    </div>
                                </div>
                            </div>
                            <div class="step-tab-panel" data-step="step2">
                                <div class="grid form project_team_form">
                                    <div class="form_group member_group">
                                        <div class="label">Team Member 1</div>
                                        <select name="member" id="">
                                            <option value="">--Select Team Member--</option>
                                            <option value="1">Ameer Hamza (Electrician)</option>
                                            <option value="2">Riaz (Carpenter)</option>
                                            <option value="3">Akbar (Carpenter)</option>
                                            <option value="3">Touseef (Carpenter)</option>
                                        </select>
                                    </div>
                                    <div class="form_group generator_group">
                                        <div class="label"></div>
                                        <button type="button" class="primary_button new_member_field_generator"><i class="bi bi-plus-lg"></i></button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="step-footer">
                            <button data-step-action="prev" class="step-btn secondary_button">Previous</button>
                            <button data-step-action="next" class="step-btn primary_button">Next</button>
                            <button data-step-action="finish" class="step-btn primary_button">Finish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.add_Project_form').steps();
    </script>
</body>
</html>