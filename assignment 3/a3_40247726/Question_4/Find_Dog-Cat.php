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
                <li><a class="navigation active" href="Find_Dog-Cat.php"> Find A Dog/Cat</a></li>
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

            <?php
            $animals = file("available_pet_info.txt", FILE_IGNORE_NEW_LINES);

            if (isset($_POST["submit_dog"])) {
                echo '<div class="pet-list">';
                $animalBreed = $_POST["breed_dog"];
                $animalAge = $_POST["age_dog"];
                $animalGender = $_POST["gender_dog"];
                $animalCompatibility = $_POST["compatibility"];

                $foundMatch = false; 
            
                for ($i = 0; $i < count($animals); $i++) {
                    $animalData = explode(":", $animals[$i]);
                    $breed = $animalData[0];
                    $age = $animalData[1];
                    $gender = $animalData[2];
                    $compatibility = $animalData[3];
                    $description = $animalData[4];
                    $name = $animalData[5];
                    $email = $animalData[6];

                    
                    if ($breed == $animalBreed && $age == $animalAge && $gender == $animalGender) {

                      
                        $compatible = true;
                        if (in_array('Other Dogs', $animalCompatibility) && !in_array('Other Dogs', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }
                        if (in_array('Other Cats', $animalCompatibility) && !in_array('Other Cats', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                        if (in_array('Small Children', $animalCompatibility) && !in_array('Small Children', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                        if (in_array('NA', $animalCompatibility) && !in_array('NA', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                      
                        if ($compatible) {
                            $foundMatch = true; // set the variable to true
                            echo '<div class="pet">';
                            echo '<img src="images/pet' . $i . '.jpg" alt="Pet"' . $i . '" picture of animal">';
                            echo '<p>Age: ' . $age . '</p>';
                            echo '<p>Breed: ' . $breed . '</p>';
                            echo '<p>Gender: ' . $gender . '</p>';
                            echo '<p>Description: ' . $description . '</p>';
                            echo '<p>Owners name: ' . $name . '</p>';
                            echo '<p>owners email: ' . $email . '</p>';
                            echo '<button>Interested</button>';
                            echo '</div>';
                        }
                    }
                }

                if (!$foundMatch) { 
                    echo ('<h3 style="color:red">Sorry, no matches were found.</h3>');
                }

                echo '</div>';
            }


            ?>

            <?php
            $animals = file("available_pet_info.txt", FILE_IGNORE_NEW_LINES);

            if (isset($_POST["submit_cat"])) {
                echo '<div class="pet-list">';
                $animalBreed = $_POST["breed_cat"];
                $animalAge = $_POST["age_cat"];
                $animalGender = $_POST["gender_cat"];
                $animalCompatibility = $_POST["compatibility"];

                $foundMatch = false; 
            
                for ($i = 0; $i < count($animals); $i++) {
                    $animalData = explode(":", $animals[$i]);
                    $breed = $animalData[0];
                    $age = $animalData[1];
                    $gender = $animalData[2];
                    $compatibility = $animalData[3];
                    $description = $animalData[4];
                    $name = $animalData[5];
                    $email = $animalData[6];

                   
                    if ($breed == $animalBreed && $age == $animalAge && $gender == $animalGender) {

                        
                        $compatible = true;
                        if (in_array('Other Dogs', $animalCompatibility) && !in_array('Other Dogs', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }
                        if (in_array('Other Cats', $animalCompatibility) && !in_array('Other Cats', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                        if (in_array('Small Children', $animalCompatibility) && !in_array('Small Children', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                        if (in_array('NA', $animalCompatibility) && !in_array('NA', explode(',', $animalData[3]))) {
                            $compatible = false;
                        }

                        
                        if ($compatible) {
                            $foundMatch = true; 
                            echo '<div class="pet">';
                            echo '<img src="images/pet' . $i . '.jpg" alt="Pet"' . $i . '" picture of animal">';
                            echo '<p>Age: ' . $age . '</p>';
                            echo '<p>Breed: ' . $breed . '</p>';
                            echo '<p>Gender: ' . $gender . '</p>';
                            echo '<p>Description: ' . $description . '</p>';
                            echo '<p>Owners name: ' . $name . '</p>';
                            echo '<p>Owners email: ' . $email . '</p>';
                            echo '<button>Interested</button>';
                            echo '</div>';
                        }
                    }
                }

                if (!$foundMatch) { 
                    echo ('<h3 style="color:red">Sorry, no matches were found.</h3>');
                }

                echo '</div>';
            }



            ?>

            <div class="content_form">
                <form>
                    <fieldset style="padding:10px">
                        <legend>
                            <h3>Find a Pet</h3>
                        </legend>

                        <label>What kind of pet would you like?</label><br><br>

                        <label>Dog:</label>
                        <input type="radio" name="choose" value="dog">

                        <label>Cat:</label>
                        <input type="radio" name="choose" value="cat"><br><br><br>
                    </fieldset><br>

                </form>

                <div id="dog-form" style="display:none;">
                    <form id="dog_form" method="post">
                        <fieldset style="padding:10px">
                            <label>What breed will you like your dog?</label><br><br>
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



                            <label>Preferred age of dog?</label>
                            <select name="age_dog" id="age_dog">
                                <option value="default"> --- </option>
                                <option value="0 - 1">0 - 1</option>
                                <option value="1 - 3">1 - 3</option>
                                <option value="3 - 7">3 - 7</option>
                                <option value="7 - over">7 - over</option>
                            </select><br><br>



                            <label>Preferred gender of dog?</label>
                            <select name="gender_dog">
                                <option value="default">---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select><br><br><br>



                            <label>Does your dog need get along with any of these options [pick as many as
                                apply]:</label><br><br>
                            <label>Other Dogs:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Dogs">
                            <label>Other Cats:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Cats">
                            <label>Small Children:</label>
                            <input type="checkbox" name="compatibility[]" value="Small Children">
                            <label>Does Not Matter:</label>
                            <input type="checkbox" name="compatibility[]" value="NA">

                            <br><br><br>



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











                <form id="cat_form" method="post">

                    <div id="cat-form" style="display:none;">
                        <fieldset style="padding:10px">
                            <label>What breed would you like your cat?</label><br><br>
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


                            <label>Preferred age of cat?</label>
                            <select name="age_cat" id="age_cat">
                                <option value="default"> --- </option>
                                <option value="0 - 1">0 - 1</option>
                                <option value="1 - 3">1 - 3</option>
                                <option value="3 - 7">3 - 7</option>
                                <option value="7 - over">7 - over</option>
                            </select><br><br>



                            <label>Preferred gender of cat?</label>
                            <select name="gender_cat" id="gender_cat">
                                <option value="default">---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select><br><br><br>


                            <label>Does your cat need get along with any of these options [pick as many as
                                apply]:</label><br><br>
                            <label>Other Dogs:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Dogs">
                            <label>Other Cats:</label>
                            <input type="checkbox" name="compatibility[]" value="Other Cats">
                            <label>Small Children:</label>
                            <input type="checkbox" name="compatibility[]" value="Small Children">
                            <label>Does Not Matter:</label>
                            <input type="checkbox" name="compatibility[]" value="NA">


                            <br><br><br>
                        </fieldset>
                        <br>
                        <label>Thank you for taking the time to fill
                            out the
                            survey!</label><br><br>
                        <input type="submit" name="submit_cat" value="Submit" onclick="validate_cat_form()">
                        <input type="reset" value="Reset">
                        <br>
                    </div>


                </form>





            </div>
            <div style="padding-left: 50px;margin-top:38%">

                <?php include('Footer.html'); ?>
            </div>

        </div>

        <script>

            //getting a reactive page for find a pet page:
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



                var breedSelect = false;



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


                return true; // allows form submission
            }




            function validate_cat_form() {
                var breed_cat = document.forms["cat_form"]["breed_cat"];
                var age_cat = document.forms["cat_form"]["age_cat"];
                var gender_cat = document.forms["cat_form"]["gender_cat"];

                var breedSelect = false;


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


                return true; // allows form submission
            }


        </script>






</body>

</html>