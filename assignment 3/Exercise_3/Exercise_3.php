<?php
$telephone = $_POST['telephone'];
if (preg_match('/^\d{3}-\d{3}-\d{4}$/', $telephone)) {
	echo "Thank you, " . $_POST['name'] . ". Your telephone number: " . $telephone . ", was correct.";
} else {
	echo "Sorry, " . $_POST['name'] . ". Your telephone number: " . $telephone . ", was not in the correct format (ddd-ddd-dddd).";
}
?>
