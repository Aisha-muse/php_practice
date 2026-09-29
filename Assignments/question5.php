<?php
//  QUESTION 5 

echo "<h2 style='color: darkorange;'>Question 5: Reverse of a Number</h2>";


// This question is about reversing a given number without using the strrev() function.


echo "<p style='color: black;'>Answer:</p>";

$number = 12345;
$reverse = 0;

while ($number > 0) {

    $digit = $number % 10;

    $reverse = ($reverse * 10) + $digit;

    $number = (int)($number / 10);

}

echo "Reverse: " . $reverse;

echo "<hr>";
?>