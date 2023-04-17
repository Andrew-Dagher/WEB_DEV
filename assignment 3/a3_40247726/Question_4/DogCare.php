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
                    <li><a class="navigation "
                            href="Home.php">Home Page</a></li>
                    <li><a class="navigation"
                    href="Create_ACC.php"> Create an account </a></li>
                    <li><a class="navigation"
                            href="Find_Dog-Cat.php">  Find A Dog/Cat</a></li>
                    <li><a class="navigation active" href="DogCare.php">
                            Dog Care</a></li>
                    <li><a class="navigation" href="CatCare.php">Cat
                            Care</a></li>
                    <li><a class="navigation" href="Login_Page.php">
                        Have A Pet To Give
                        Away</a></li>
                    <li><a class="navigation" href="Contact.php">
                            Contact Us</a></li>
                            <li><a class="navigation" href="Logout.php">
                        Logout</a></li>
                </ul>
            </div>


            <div class="main_content">
                <?php include('Header.html'); ?>
                <div class="content">
                    <ul>
                        <li style="padding:20px"> <a style="padding:0px;"
                                href="https://www.aspca.org/pet-care/dog-care"><span
                                    style="color:#202020b9
                                    ;font-size:20px;font-weight:bold;">Feeding:</span></a>
                            Give your dog a balanced diet made up of premium dog
                            food that satisfies their dietary requirements. Make
                            sure to feed them at the same time each day and to
                            always provide them with fresh water.</li>
                        <li style="padding:20px"><a style="padding:0px;"
                                href="https://www.aspca.org/pet-care/dog-care"><span
                                    style="color:#202020b9
                                    ;font-size:20px;font-weight:bold;">Exercise:</span></a>
                            To keep your dags physical and mental health up to
                            par, give your pet daily exercise. This consists of
                            walking, playing catch, and running in a contained,
                            enclosed space.</li>
                        <li style="padding:20px"><a style="padding:0px;"
                                href="https://www.aspca.org/pet-care/dog-care"><span
                                    style="color:#202020b9
                                    ;font-size:20px;font-weight:bold;">Grooming:</span></a>
                            Your dog's fur has to be groomed frequently to stay
                            healthy and glossy. Regular brushing is recomended,
                            as are regular nail trimming and occasional ear
                            cleaning.</li>
                        <li style="padding:20px"><a style="padding:0px;"
                                href="https://www.aspca.org/pet-care/dog-care"><span
                                    style="color:#202020b9
                                    ;font-size:20px;font-weight:bold;">Training:</span></a>
                            To help your dog become well-behaved, start teaching
                            them early on. Basic instructions like "sit,"
                            "stay," and "come" can be included in this.</li>
                        <li style="padding:20px"><a style="padding:0px;"
                                href="https://www.aspca.org/pet-care/dog-care"><span
                                    style="color:#202020b9
                                    ;font-size:20px;font-weight:bold;">Medical
                                    Care:</span></a> To keep your dog healthy,
                            you should have yearly vet visits. Keep a record of
                            their visits, and if you detect any changes in their
                            behavior or health, call or go to your vet.</li>
                    </ul>
                </div>
                <div style="padding-left: 50px;margin-top:40%">

                <?php include('Footer.html'); ?>
                </div>
                
           
        </div>
        </body>
</html>
