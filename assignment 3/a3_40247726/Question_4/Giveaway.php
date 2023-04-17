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

            <?php
            $form_submitted_dog = false;
            if (isset($_POST['submit_dog'])) {

                $breed_dog = $_POST['breed_dog'];
                $age_dog = $_POST['age_dog'];
                $gender_dog = $_POST['gender_dog'];
                $compatibility = implode(",", $_POST['compatibility']);
                $comment_dog = $_POST['comment_dog'];
                $name_dog = $_POST['name_dog'];
                $email_dog = $_POST['email_dog'];

                $pet_info = $breed_dog . ':' . $age_dog . ':' . $gender_dog . ':' . $compatibility . ':' . $comment_dog . ':' . $name_dog . ':' . $email_dog . "\n";

                $file = fopen('available_pet_info.txt', 'a');
                fwrite($file, $pet_info);
                fclose($file);
                $form_submitted_dog = true;

            }
            ?>

            <?php
            $form_submitted_cat = false;
            if (isset($_POST['submit_cat'])) {

                $breed_cat = $_POST['breed_cat'];
                $age_cat = $_POST['age_cat'];
                $gender_cat = $_POST['gender_cat'];
                $compatibility = implode(",", $_POST['compatibility']);
                $comment_cat = $_POST['comment_cat'];
                $name_cat = $_POST['name_cat'];
                $email_cat = $_POST['email_cat'];

                $pet_info = $breed_cat . ':' . $age_cat . ':' . $gender_cat . ':' . $compatibility . ':' . $comment_cat . ':' . $name_cat . ':' . $email_cat . "\n";

                $file = fopen('available_pet_info.txt', 'a');
                fwrite($file, $pet_info);
                fclose($file);

                $form_submitted_cat = true;
            }
            ?>


            <div class="content_form">


                <form>
                    <fieldset style="padding:10px">
                        <legend>
                            <h3>Give Away your Pet</h3>
                        </legend>

                        <label>What is your pet?</label><br><br>

                        <label>Dog:</label>
                        <input type="radio" name="choose" value="dog">
                        <label>Cat:</label>
                        <input type="radio" name="choose" value="cat"><br><br><br>
                    </fieldset><br>

                </form>

                <div id="dog-form" style="display:none;">
                    <form id="dog_form" method="post">
                        <fieldset style="padding:10px">
                            <label>What breed is your dog?</label><br><br>
                            <label>German Shepherd:</label>
                            <input type="radio" name="breed_dog" value="German Shepherd">

                            <label>Bulldog:</label>
                            <input type="radio" name="breed_dog" value="Bulldog">

                            <label>Golden Retriever:</label>
                            <input type="radio" name="breed_dog" value="Golden Retriever"><br><br>

                            <label>Poodle:</label>
                            <input type="radio" name="breed_dog" value="Poodle">

                            <label>Husky:</label>
                            <input type="radio" name="breed_dog" value="Husky">




                            <br><br><br>



                            <label> Age of dog?</label>
                            <select name="age_dog" id="age_dog">
                                <option value="default"> --- </option>
                                <option value="0 - 1">0 - 1</option>
                                <option value="1 - 3">1 - 3</option>
                                <option value="3 - 7">3 - 7</option>
                                <option value="7 - over">7 - over</option>
                            </select><br><br>



                            <label>Dog gender?</label>
                            <select name="gender_dog">
                                <option value="default">---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select><br><br><br>



                            <label>Does your dog get along with
                                any of these options [pick as many as
                                apply]:
                            </label><br><br>
                            <label>Other Dogs:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Dogs">
                            <label>Other Cats:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Cats">
                            <label>Small Children:</label>
                            <input type="checkbox" name="compatibility[]" value="Small children">
                            <label>Does Not Matter:</label>
                            <input type="checkbox" name="compatibility[]" value="NA">

                            <br><br><br>


                            <p><label>Comment section to
                                    describe your pet:</label></p>
                            <textarea name="comment_dog" rows="10" cols="100"></textarea>

                            <br><br><br>

                            <label>Your full name:</label>
                            <input type="text" name="name_dog">

                            <br><br><br>

                            <label>Email:</label>
                            <input type="email" placeholder="Enter your email" name="email_dog">
                        </fieldset>
                        <br>
                        <label>Thank you for taking the time to fill
                            out the
                            survey!</label><br><br>
                        <input type="submit" name="submit_dog" value="Submit" onclick="validate_dog_form()">
                        <input type="reset" value="Reset">
                        <br>


                    </form>
                </div>


                <div id="cat-form" style="display:none;">
                <form id="cat_form" method="post">

                  
                        <fieldset style="padding:10px">
                            <label>What breed is your cat?</label><br><br>
                            <label>Maine Coon:</label>
                            <input type="radio" name="breed_cat" value="Maine Coon">

                            <label>Bristish Shorthair:</label>
                            <input type="radio" name="breed_cat" value="Bristish Shorthair">

                            <label>Sphynx:</label>
                            <input type="radio" name="breed_cat" value="Sphynx"><br><br>

                            <label>American Shorthair:</label>
                            <input type="radio" name="breed_cat" value="American Shorthair">
                            <label>Persian:</label>
                            <input type="radio" name="breed_cat" value="Persian">



                            <br><br><br>


                            <label> Age of cat?</label>
                            <select name="age_cat" id="age_cat">
                                <option value="default"> --- </option>
                                <option value="0 - 1">0 - 1</option>
                                <option value="1 - 3">1 - 3</option>
                                <option value="3 - 7">3 - 7</option>
                                <option value="7 - over">7 - over</option>
                            </select><br><br>



                            <label>Cat gender?</label>
                            <select name="gender_cat" id="gender_cat">
                                <option value="default">---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select><br><br><br>





                            <label>Does your dog get along with
                                any of these options [pick as many as
                                apply]:
                            </label><br><br>
                            <label>Other Dogs:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Dogs">
                            <label>Other Cats:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Cats">
                            <label>Small Children:</label>
                            <input type="checkbox" name="compatibility[]" value="Small Children">
                            <label>Does Not Matter:</label>
                            <input type="checkbox" name="compatibility[]" value="NA">
                            <br><br><br>



                            <p><label>Comment section to
                                    describe your pet:</label></p>
                            <textarea name="comment_cat" rows="10" cols="100"></textarea>

                            <br><br><br>

                            <label>Your full name:</label>
                            <input type="text" name="name_cat">

                            <br><br><br>

                            <label>Email:</label>
                            <input type="email" placeholder="Enter your email" name="email_cat">
                            <br><br><br>
                        </fieldset>
                        <br>
                        <label>Thank you for taking the time to fill
                            out the
                            survey!</label><br><br>
                        <input type="submit" name="submit_cat" value="Submit"  onclick="validate_cat_form()">
                        <input type="reset"  value="Reset">
                        <br>
                    


                </form>
                </div>





            </div>


            <?php if ($form_submitted_dog): ?>
                <p style="color:green;padding-left: 60px;">Form submitted successfully.</p>
            <?php endif; ?>
            <?php if ($form_submitted_cat): ?>
                <p style="color:green;padding-left: 60px;">Form submitted successfully.</p>
            <?php endif; ?>



            <div style="padding-left: 50px;margin-top:37%; ">

                <?php include('Footer.html'); ?>
            </div>
        </div>
        <script>




            //getting a reactive page for giveaway a pet page:
            const catForm = document.getElementById("cat-form");
            const dogForm = document.getElementById("dog-form");

            document.querySelectorAll('input[type=radio][name="choose"]').forEach(function (radio) {
                radio.addEventListener('change', function () {
                    if (this.value === 'cat') {
                        catForm.style.display = "block";
                        dogForm.style.display = "none";
                    } else if (this.value === 'dog') {
                        catForm.style.display = "none";
                        dogForm.style.display = "block";
                    }
                });
            });

            function validate_dog_form() {

                var breed_dog = document.forms["dog_form"]["breed_dog"];
                var age_dog = document.forms["dog_form"]["age_dog"];
                var gender_dog = document.forms["dog_form"]["gender_dog"];
                var textarea_dog = document.forms["dog_form"]["comment_dog"];
                var name_dog = document.forms["dog_form"]["name_dog"];
                var email_dog = document.forms["dog_form"]["email_dog"];


                var breedSelect = false;
                var textarea_dog_value = textarea_dog.value.trim();
                var emailDefault = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


                for (var i = 0; i < breed_dog.length; i++) {
                    if (breed_dog[i].checked) {
                        breedSelect = true;
                        break;
                    }
                }
                if (!breedSelect) {
                    alert("Please select a Breed.");
                    event.preventDefault();
                    return false; // prevents form submission

                }
                if (age_dog.value === "default") {
                    alert("Please select an age.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (gender_dog.value === "default") {
                    alert("Please select a gender.");
                    event.preventDefault();
                    return false; // prevents form submission
                }
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

                if (!checkedOne) {
                    alert("Please select at least one checkbox.");
                    event.preventDefault();
                    return false; // prevents form submission
                }
                if (textarea_dog_value === "") {
                    alert("Please add some comments on your pet.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (name_dog.value === "") {
                    alert("Please add your name.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (emailDefault.test(email_dog.value) == false) {
                    alert("Please add a valid email.");
                    event.preventDefault();
                    return false; // prevents form submission
                }
                return true; // allows form submission
            }




            function validate_cat_form() {
                var breed_cat = document.forms["cat_form"]["breed_cat"];
                var age_cat = document.forms["cat_form"]["age_cat"];
                var gender_cat = document.forms["cat_form"]["gender_cat"];
                var textarea_cat = document.forms["cat_form"]["comment_cat"];
                var name_cat = document.forms["cat_form"]["name_cat"];
                var email_cat = document.forms["cat_form"]["email_cat"];


                var breedSelect = false;
                var textarea_cat_value = textarea_cat.value.trim();
                var emailDefault = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


                for (var i = 0; i < breed_cat.length; i++) {
                    if (breed_cat[i].checked) {
                        breedSelect = true;
                        break;
                    }
                }
                if (!breedSelect) {
                    alert("Please select a Breed.");
                    event.preventDefault();
                    return false; // prevents form submission

                }
                if (age_cat.value === "default") {
                    alert("Please select an age.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (gender_cat.value === "default") {
                    alert("Please select a gender.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

                if (!checkedOne) {
                    alert("Please select at least one checkbox.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (textarea_cat_value === "") {
                    alert("Please add some comments on your pet.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (name_cat.value === "") {
                    alert("Please add your name.");
                    event.preventDefault();
                    return false; // prevents form submission
                }

                if (emailDefault.test(email_cat.value) == false) {
                    alert("Please add a valid email.");
                    event.preventDefault();
                    return false; // prevents form submission
                }
                return true; // allows form submission
            }


        </script>

</body>

</html>