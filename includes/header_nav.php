<?php
include "./includes/session_helper.inc.php";
?>
<header>
    <div class="wrapper">
        <div class="left">
            <h1 class="title">Dashboard</h1>
        </div>
        <div class="right">
            <!-- <div class="search">
                <div class="icon">
                    <i class="bi bi-search"></i>
                </div>
            </div> -->
            <div href="" class="user_info">
                <div class="container">
                    <div class="avatar">
                        <div class="container">
                            <img src="./assets/images/user.jpg" alt="user_image">
                        </div>
                    </div>
                    <div class="username"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}?></div>
                    <a class="logout" href="./includes/logout.inc.php">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
                </div>
</div>
        </div>
    </div>
</header>
<nav>
    <div class="wrapper">
        <button class="nav_toggle_button">
            <i class="bi bi-chevron-left"></i>
        </button>
        <div class="logo">
            <a href="" class="container">
                <img src="./assets/images/nav_logo.PNG" alt="mmz_interiors_logo">
            </a>
        </div>
        <div class="nav">
            <div class="container">
                <ul>
                    <li><a href="" class="active">
                        <span class="icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="title">Dashboard</span></a>
                    </li>                    
                    <li><a href="">
                        <span class="icon"><i class="bi bi-bank2"></i></span>
                        <span class="title">Transactions</span></a>
                    </li>                    
                    <li><a href="">
                        <span class="icon"><i class="bi bi-building"></i></span>
                        <span class="title">Projects</span></a>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
</nav>