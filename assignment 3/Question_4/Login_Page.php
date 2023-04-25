<?php

session_start();


if (isset($_SESSION['username'])) {

    header('Location: Giveaway.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST["username"];
    $password = $_POST["password"];


    if (preg_match("/^[a-zA-Z0-9]+$/", $username) && preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}$/", $password)) {


        if (isValidLogin($username, $password)) {

            $_SESSION['username'] = $username;

            header('Location: Giveaway.php');
            exit();
        } else {

            echo ('<p style="color:red;">HERE Invalid username or password. Please try again.</p>');
        }
    } else {

        echo ('<p style="color:red;">Invalid username or password format. Please try again.</p>');
    }
}


function isValidLogin($username, $password)
{
    $filename = "login.txt";
    $file = fopen($filename, "r");
    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            $credentials = explode(":", $line);
            if ($credentials[0] == $username && trim($credentials[1]) == $password) {
                fclose($file);
                return true;
            }
        }
        fclose($file);
    }
    return false;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HomeFinder</title>
    <link rel="stylesheet" href="Question_4.css">
    <script src="Question_4.js"></script>

    <style>
        .button {}

        .button:hover {
            background-color: #3e868e8e;
            border-radius: 10px;
        }
    </style>
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
                <li><a class="navigation active" href="Login_Page.php">
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




                <form style="height:450px;width:auto;" method="post">
                    <div
                        style="box-shadow:0 0 10px rgba(0, 0, 0, 0.2);padding:60px;width:350px;background-color: #00eaffb9;margin-left:100%;margin-top:20%;border-radius:10px;">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                        <br><br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <br>
                        <button type="submit">Login</button>
                    </div>
                </form>



            </div>
            <div style="padding-left: 50px;margin-top:44%">

                <?php include('Footer.html'); ?>
            </div>
        </div>





</body>

</html>