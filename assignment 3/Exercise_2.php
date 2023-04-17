<html>

<body>
    <h2>Testing numOfVisits</h2>
    <?php
    $visits = 1;

    if (isset($_COOKIE['visits'])) { // will not run the first time on the page because cookie "visits" is only set after.
        $visits = $_COOKIE['visits'] + 1;
    }

    setcookie('visits', $visits, time() + (86400 * 30), "/"); // cookie will expire in 30 days
    
    if ($visits == 1) {
        echo "Welcome to my webpage! It is your first time that you are here.";
    } else {
        echo "Hello, this is the " . $visits . " time that you are visiting my webpage.";

        if (isset($_COOKIE['lastvisit'])) {//will not run the frist time because "lastvisit" is not set (its null)
            $lastvisit = $_COOKIE['lastvisit'];
            $lastvisit_formatted = date('D M j H:i:s T Y', $lastvisit);
            echo " Last time you visited my webpage was on: " . $lastvisit_formatted;
        }
    }

    setcookie('lastvisit', time(), time() + (86400 * 30), "/"); // update the last visit cookie. it also holds the last time visited.
    ?>

</body>

</html>