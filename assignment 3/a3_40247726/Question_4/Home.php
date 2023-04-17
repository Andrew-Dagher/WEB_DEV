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
                    <li><a class="navigation active"
                            href="Home.php">Home Page</a></li>
                    <li><a class="navigation"
                    href="Create_ACC.php"> Create an account </a></li>
                    <li><a class="navigation"
                            href="Find_Dog-Cat.php"> Find A Dog/Cat</a></li>
                    <li><a class="navigation" href="DogCare.php">
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

                <div>
                    <h1 style="padding-left:65px;padding-top:20px"> Welcome to
                        the HomeFinder for pets!</h1>
                       
                </div>
                <div class="content">

                    <div style="margin:30px">
                        <h1 style="text-align:center;padding-bottom:5px">Our Mission</h1>

                        <p
                            style="padding: 35px;font-size:25px;border:solid
                            2px;">
                            Our goal is to improve the well-being of dogs and
                            cats by giving them high-quality care and a secure
                            home. Regardless of their past or present, our goal
                            is to provide them the love, comfort, and care they
                            deserve. We work to provide mistreated and neglected
                            dogs with a nurturing environment so they can
                            rehabilitate and find permanent homes because we
                            firmly believe that every pet deserves a second
                            chance. By helping pets in need find loving homes,
                            we also hope to raise awareness about proper pet
                            management and contribute to the elimination of pet
                            homelessness. Our ultimate objective is to establish
                            a society in which each dog and cat is appreciated
                            and accorded the respect and consideration they
                            deserve.</p>
                    </div>
                    <div>
                        <a
                            href="https://www.scotsman.com/webimg/b25lY21zOmNlNzdlMjkyLTk0YTMtNDZjMy1hNjM3LTI2NGMwMjY0NjEwMjo2ZjQwYTBhZS03MjM4LTQ2ZGQtOTZlZi02ZWI0Y2VmYjQ5NTg=.jpg">
                            <img class="home_dog"
                                src="Images/Home_Dogs.jpg" alt="dog
                                image"></a>
                    </div>
                </div>

                <div class="content">
                    <a
                        href="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1036&q=80">
                        <img class="history_cat"
                            src="Images/cat_home.jpeg" alt="cat
                            image"></a>

                    <div class="History">



                        <h1 style="padding-left:25px; padding-bottom:5px;">Our
                            History</h1>
                        <p
                            style="padding:40px;padding-right:20px;font-size:25px;border:solid
                            2px;">HomeFinder, a company that offers pet-related
                            services, was established in 2020 by a group of
                            people who were both passionate about animals and
                            professionals in the pet care sector. The company
                            began as a tiny pet shelter but quickly added dog
                            and cat care services, online services for potential
                            families to browse shelters, and find a missing pet
                            to its list of offerings.
                            Today, HomeFinder
                            is regarded as one of the top pet care providers,
                            and it has a devoted team of specialists focused on
                            the well being of pets.</p>


                    </div>

                </div>

                <div style="position: absolute;padding-left: 50px;width: 100%;">
                <?php include('Footer.html'); ?>
                </div>
            </div>
        </div>

       
    </body>
</html>