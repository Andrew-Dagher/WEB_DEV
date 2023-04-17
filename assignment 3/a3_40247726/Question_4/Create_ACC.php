<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HomeFinder</title>
    <link rel="stylesheet" href="Question_4.css">
    <script src="Question_4.js"></script>

    <style>
        .button {
            float: left;
            border: none;
            background-color: transparent;
            padding: 10px;
            margin-top: 10px;

        }

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
                <li><a class="navigation active" href="Create_ACC.php"> Create an account </a></li>
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
                        <li><a class="navigation" href="Logout.php">
                        Logout</a></li>
            </ul>
        </div>

        <div class="main_content">
            <?php include('Header.html'); ?>
            <div class="content">


                <?php
                
                $message = '';

                
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    
                    if (preg_match("/^[a-zA-Z0-9]+$/", $username) && preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}$/", $password)) {

                        
                        if (usernameExists($username)) {
                            $message = '<p style="color:red;">This username is not available. Please choose another one.</p>';
                        } else {
                            
                            $file = fopen("login.txt", "a");
                            $data = $username . ":" . $password . "\n";
                            if (fwrite($file, $data) === false) {
                                $message = "<script>alert('Error writing to file.');</script>";
                            } else {
                               
                                $message = '<p style="color:green;">Account created successfully. You can now login.</p>';
                            }
                            fclose($file);
                        }
                    } else {
                        $message = '<p style="color:red;">Invalid username or password format. Please try again.</p>';
                    }
                }

                
                function usernameExists($username)
                {
                    $lines = file("login.txt");
                    foreach ($lines as $line) {
                        $data = explode(":", $line);
                        if ($data[0] == $username) {
                            return true;
                        }
                    }
                    return false;
                }
                ?>

                
                <form style="height:450px;width:auto;" method="post">
                    <div
                        style="box-shadow:0 0 10px rgba(0, 0, 0, 0.2);padding:60px;width:350px;background-color: #00eaffb9;margin-left:70%;margin-top:10%;border-radius:10px;">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                        <br><br><br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <br>

                        <button class="button" type="submit">Create Account</button>
                    </div>
                    <div style="padding: 30px;width:600px;margin-left:40%">
                        <p>Username can contain letters (both upper and lower case) and digits only. Password must be at
                            least 4 characters long (characters are to be letters and digits only), have at least one
                            letter and at least one digit.</p>
                    </div>
                    <div>
                    <?php echo $message; ?>
                </div>

                </form>

             
               








            </div>
            <div style="padding-left: 50px;margin-top:25%">

                <?php include('Footer.html'); ?>
            </div>
        </div>





</body>

</html>