<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/header_nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/index.css?v=<?php echo time(); ?>">
    <!-- COMMON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SCRIPTS -->
    <script src="./assets/js/behaviour/nav_toggle.js" defer></script>
    <script src="./assets/js/behaviour/dataTables.js" defer></script>
    <!-- JQUERY DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</head>
<body>
    <?php include "./includes/header_nav.php"; ?>
    <div class="body">
        <div class="main_container">
            <div class="earning_and_expenses card">
                <div class="earning">
                    <div class="head">
                        <h2 class="title">Earning</h2>
                    </div>
                    <div class="icon_container">
                        <div class="card_icon">
                            <i class="bi bi-wallet"></i>
                        </div>
                        <div class="details">
                            <div class="left">
                                <div class="label">Total Balance</div>
                                <div class="amount">PKR 20,000</div>
                                <div class="compare">
                                    <span class="positive"><i class="bi bi-arrow-up"></i>12%</span>
                                    than last month
                                </div>
                            </div>
                            <div class="right"></div>
                        </div>
                    </div>
                </div>
                <div class="expenses">
                    <div class="head">
                        <div class="container">
                            <h2 class="title">Expenses</h2>
                            <div class="sort">
                                <select name="" id="">
                                    <option value="0">Daily</option>
                                    <option value="1">Monthly</option>
                                    <option value="2">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="icon_container">
                        <div class="card_icon">
                            <i class="bi bi-file-earmark-spreadsheet"></i>
                        </div>
                        <div class="details">
                            <div class="left">
                                <div class="label">Total Expenses</div>
                                <div class="amount">PKR 20,000</div>
                                <div class="compare">
                                    <span class="negative"><i class="bi bi-arrow-down"></i>12%</span>
                                    than last month
                                </div>
                            </div>
                            <div class="right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project_table card">
                <div class="head">
                    <div class="top">
                        <div class="container">
                            <h2 class="title">Projects Table</h2>
                            <a href="" class="button see_all_button no_styles_button">See All</a>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="container">
                            <div class="left row_flex icon_container">
                                <div class="card_icon"><i class="bi bi-building"></i></div>
                                <div class="details">
                                    <div class="label">Total Projects</div>
                                    <div class="amount">57</div>
                                </div>
                            </div>
                            <div class="right">
                                <button class="export_button secondary_button_filled">PDF<i class="bi bi-download"></i></button>
                                <button class="export_button secondary_button_filled">xls<i class="bi bi-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <table class="project_table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Start Date</th>
                                <th>Project</th>
                                <th>Client</th>
                                <th>City</th>
                                <th>End Date</th>
                                <th>Payment</th>
                                <th>Expenses</th>
                                <th>Profit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>10-10-2022</td>
                                <td>NDURE Girls College Road</td>
                                <td>NDURE</td>
                                <td>Sahiwal</td>
                                <td>20-12-2022</td>
                                <td>760,000</td>
                                <td>640,000</td>
                                <td>12,000</td>
                                <td><a href="" class="button primary_button_nofill">DETAILS</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pending_payments card">
                <div class="head">
                    <div class="container vertical_center">
                        <div class="left vertical_center">
                            <div class="card_icon card_icon_small place_middle">
                                <i class="fa-regular fa-chart-simple"></i>
                            </div>
                            <h2 class="title">Pending Payments</h2>
                        </div>
                        <div class="right">
                            <a href="" class="button no_styles_button show_pending_payments_button">See All</a>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <table>
                        <tbody>
                            <tr>
                                <td>NDURE Sahiwal</td>
                                <td>PKR 762,000</td>
                                <td><a href="" class="button primary_button_nofill">Details</a></td>
                            </tr>
                            <tr>
                                <td>NDURE Sahiwal</td>
                                <td>PKR 762,000</td>
                                <td><a href="" class="button primary_button_nofill">Details</a></td>
                            </tr>
                            <tr>
                                <td>NDURE Sahiwal</td>
                                <td>PKR 762,000</td>
                                <td><a href="" class="button primary_button_nofill">Details</a></td>
                            </tr>
                            <tr>
                                <td>NDURE Sahiwal</td>
                                <td>PKR 762,000</td>
                                <td><a href="" class="button primary_button_nofill">Details</a></td>
                            </tr>
                            <tr>
                                <td>NDURE Sahiwal</td>
                                <td>PKR 762,000</td>
                                <td><a href="" class="button primary_button_nofill">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="upcomming_projects card">
                <div class="head">
                    <div class="container vertical_center">
                        <div class="left vertical_center">
                            <div class="card_icon card_icon_small place_middle">
                                <i class="fa-regular fa-chart-simple"></i>
                            </div>
                            <h2 class="title">Upcomming Projects</h2>
                        </div>
                        <div class="right">
                            <a href="" class="button no_styles_button show_upcomming_projects_button">See All</a>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <table>
                        <tbody>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                            <tr>
                                <td>NDURE Raheem Yar Khan</td>
                                <td>20 Days left</td>
                                <td>20-10-2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>
</html>