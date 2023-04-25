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
                                <li><a class="navigation"  href="Create_ACC.php"> Create an account </a></li>
                                <li><a class="navigation" href="Find_Dog-Cat.php"> Find A Dog/Cat</a></li>
                                <li><a class="navigation" href="DogCare.php">
                                                Dog Care</a></li>
                                <li><a class="navigation active" href="CatCare.php">Cat
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
                                        <li style="padding:20px"> <a style="padding:0px;
                                                                " href="https://www.aspca.org/pet-care/cat-care"><span
                                                                style="color:#202020b9
                                                                        ;font-size:20px;font-weight:bold;">Feeding:</span></a>
                                                Give your cat a healthy,
                                                balanced diet made up of
                                                premium cat food that
                                                meets all of their
                                                nutritional needs. Make
                                                sure to provide them
                                                with clean water, and
                                                feed them at the same
                                                time every day.</li>
                                        <li style="padding:20px"> <a style="padding:0px;
                                                                " href="https://www.aspca.org/pet-care/cat-care"><span
                                                                style="color:#202020b9
                                                                        ;font-size:20px;font-weight:bold;">Litter
                                                                Box:</span></a>
                                                Put your cat's litter
                                                box somewhere quiet and
                                                convenient. You will
                                                need to clean it
                                                frequently to avoid
                                                unwanted sents.</li>
                                        <li style="padding:20px"> <a style="padding:0px;
                                                                " href="https://www.aspca.org/pet-care/cat-care"><span
                                                                style="color:#202020b9
                                                                        ;font-size:20px;font-weight:bold;">Playtime:</span></a>
                                                To maintain their
                                                physical and mental
                                                health, cats need to
                                                play frequently. Playing
                                                with toys like balls,
                                                strings, and feathers is
                                                a way to stimulate them.</li>
                                        <li style="padding:20px"> <a style="padding:0px;
                                                                " href="https://www.aspca.org/pet-care/cat-care"><span
                                                                style="color:#202020b9
                                                                        ;font-size:20px;font-weight:bold;">Grooming:</span></a>
                                                To keep your cat's skin
                                                and fur healthy, a
                                                regular grooming is
                                                important. This consists
                                                of nail trimming,
                                                brushing, and ear
                                                cleaning are recommended
                                                for cats.</li>
                                        <li style="padding:20px"> <a style="padding:0px;
                                                                " href="https://www.aspca.org/pet-care/cat-care"><span
                                                                style="color:#202020b9
                                                                        ;font-size:20px;font-weight:bold;">Medical
                                                                Care:</span></a>
                                                To keep your cat
                                                healthy, make a yearly
                                                visit to the vet. Keep
                                                track of their visits,
                                                and stay vigileant
                                                towards any changes in
                                                their behaviour or
                                                health, seek veterinary
                                                care.</li>
                                </ul>
                        </div>
                        <div style="padding-left: 50px;margin-top:35%">
                        <?php include('Footer.html'); ?>
                        </div>
                        
                </div>
</body>

</html>