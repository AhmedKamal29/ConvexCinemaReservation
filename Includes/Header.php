<head>
    <title> <?php echo TITLE; ?> </title>
    <style>
        #ACR-profile {
            display: none;
        }

    </style>
</head>


<script src="/Includes/Scripts.js"></script>
<!--    navigation header made by Rana178545 -->
<!--    Search bar made by ahmed154989 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="Images/Logo/Logo(White).png" sizes="16x16 32x32" type="image/png">
<link type="text/css" href="Includes/Style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="Add-On/fontawesome-free-5.12.1-web/css/all.min.css">
<link rel="stylesheet" href="Add-On/fontawesome-free-5.12.1-web/js/all.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--<?php
session_start();
$USERNAME = $_SESSION['Username'];
?>-->

<header>
    <nav>
        <div class="RCR-navbar">
            <a href="Home.php">Home</a>
            <a href="Cinema.php">Cinemas</a>
            <div class="RCR-dropdown">
                <button class="RCR-dropbtn">Movies
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="RCR-dropdown-content">
                    <a href="What'sOn.php">Whats's On</a>
                    <a href="ComingSoon.php">Coming Soon</a>
                </div>
            </div>
            <a href="AboutUs.php">About</a>
            <a href="Contact Us.php">Contact</a>

            <div class="RCR-dropdown">
                <button class="RCR-dropbtn">Account
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="RCR-dropdown-content">
                    <a href="Home.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Log out</a>
                </div>
            </div>

            <a style="float: right;" href="Login.php"><i class="fas fa-user"></i></a>

            <div class="ACR-Search">
                <input class="ACR-Searchbox" type="text" placeholder="Search">
                <button type="submit" class="ACR-Searchbtn"> <i class="fas fa-search"></i></button>
            </div>
        </div>
    </nav>
</header>
<!-- navigation code ends here -->
