<?php
//  QUESTION 2 

echo "<h2 style='color: navy;'>Question 2: Divisible by 3 and 5</h2>";


// This question is about checking whether a number is divisible by 3, 5, both, or neither.


echo "<p style='color: dark;'>Answer:</p>";

$number = 16;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
}
elseif ($number % 3 == 0) {
    echo "The number is divisible by 3.";
}
elseif ($number % 5 == 0) {
    echo "The number is divisible by 5.";
}
else {
    echo "The number is divisible by neither 3 nor 5.";
}

echo "<hr>";
?>