<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HomeFinder</title>
    <link rel="stylesheet" href="Question_4.css">
    <script src="Question_4.js"></script>
</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Navigation</h2>
            <ul>
                <li><a class="navigation" href="Home.php">Home Page</a></li>
                <li><a class="navigation" href="Create_ACC.php"> Create an account </a></li>
                <li><a class="navigation" href="Find_Dog-Cat.php"> Find A Dog/Cat</a></li>
                <li><a class="navigation" href="DogCare.php">
                        Dog Care</a></li>
                <li><a class="navigation" href="CatCare.php">Cat
                        Care</a></li>
                <li><a class="navigation" href="Login_Page.php">
                        Have A Pet To Give
                        Away</a></li>
                <li><a class="navigation" href="Contact.php">
                        Contact Us</a></li>
                <li><a class="navigation active" href="Logout.php">
                        Logout</a></li>
            </ul>
        </div>


        <div class="main_content">
            <?php include('Header.html'); ?>
            <div class="content">
                <?php

                


                if (!isset($_SESSION['username'])) {
                    echo ("You are not logged in.");
                }


                if (isset($_POST['logout'])) {


                    if (isset($_SESSION['username'])) {
                        echo ("You have been successfully logged out. Log back in on the Have A Pet To Give Away Page.");
                    }
                    $_SESSION = array();


                    session_destroy();



                }
                ?>





                <form method="post">
                    <div
                        style="padding-left:40px;padding-right:40px;padding-bottom:70px;padding-top:10px;margin:50px;margin-left:310px;box-shadow:0 0 10px rgba(0, 0, 0, 0.2);background-color: #00eaffb9;border-radius:10px;">
                        <button type="submit" name="logout">Logout</button>
                    </div>
                </form>





            </div>
            <div style="padding-left: 50px;margin-top:50%">

                <?php include('Footer.html'); ?>
            </div>
        </div>





</body>

</html>