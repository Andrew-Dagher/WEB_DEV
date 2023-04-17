<!DOCTYPE html>
<html>
<head>
	<title>PHP Function Demo</title>
</head>
<body>
	<h2>Testing findSummation()</h2>
	<?php
	function findSummation($NUM = 1) {
	    if(!is_numeric($NUM) || $NUM < 1) {
	        return false;
	    }

	    $sum = 0;
	    for($i = 1; $i <= $NUM; $i++) {
	        $sum += $i;
	    }

	    return $sum;
	}

	$NUM = 5;
	$result = findSummation($NUM);

	if($result !== false) {
	    echo "The summation of positive integer numbers from 1 to $NUM is: $result";
	} else {
	    echo "Invalid input! Please provide a positive integer number.";
	}
	?>
	





	<h2>Testing uppercaseFirstandLast()</h2>
	<?php
	function uppercaseFirstandLast($str) {
	    $words = explode(" ", $str);//split the string into an array (seperate after each space)
	    $result = "";//initiate result as empty

	    foreach($words as $word) {//go through the array and update the strings when bigger than 2 char
	        if(strlen($word) > 2) {
	            $first = strtoupper(substr($word, 0, 1));
	            $last = strtoupper(substr($word, -1));
	            $middle = substr($word, 1, -1);
	            $result .= $first . $middle . $last . " ";//result will be string string string string...
	        } else {
	            $result .= $word . " ";
	        }
	    }
	    return $result;
	}

	$str = "hello my name is andrew and this is exercice 1 of 287 class.";
	$result = uppercaseFirstandLast($str);
	echo "Input string: $str<br>";
	echo "Modified string: $result";
	?>
	





	<h2>Testing findAverage_and_Median()</h2>
	<?php
	function findAverage_and_Median($arr) {
	    sort($arr);
	    $count = count($arr);
	    $sum = array_sum($arr);
	    $average = $sum / $count;
	    if($count % 2 == 0) {//even count so median is the average of the 2 middle numbers on the array
	        $median = ($arr[($count / 2) - 1] + $arr[$count / 2]) / 2;
	    } 
		else {//odd count meaning that the median is the middle number of the sorted array
	        $median = $arr[($count - 1) / 2];
	    }
	    return array("average" => $average, "median" => $median);
	}

	$arr = array(1, 3, 5, 7, 9,20 );
	$result = findAverage_and_Median($arr);
	echo "Input array: " . implode(", ", $arr) . "<br>";//adds a ", " after each element except for the last
	echo "Average: " . $result["average"] . "<br>";
	echo "Median: " . $result["median"];
	?>
	








	<h2>Testing find4Digits()</h2>
	<?php
	function find4Digits($str) {
	    $numbers = explode(" ", $str);//seperate at a space
	    foreach($numbers as $number) {//storing element of array numbers into a string of number and check if that strings length is 4. doing this for each elements.
	        if(strlen($number) == 4) {
	            return $number;
	        }
	    }
	    return false;
	}

	$str = " 56 HELLO 8 90 3457"; //shoudl return 3457
	$result = find4Digits($str);
	if($result !== false) {
	    echo "The first four-digit number in the string '$str' is: $result";
	} else {
	    echo "No four-digit number found in the string '$str'.";
	}
	?>


</body>
</html>
