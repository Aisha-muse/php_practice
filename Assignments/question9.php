<?php
//  QUESTION 9

echo "<h2 style='color: darkorange;'>Question 9: Prime or Non-Prime</h2>";


// This question is about checking whether a given number is prime or non-prime.


echo "<p style='color: black;'>Answer:</p>";

$number = 17;

$isPrime = true;

if ($number < 2) {
    $isPrime = false;
}

for ($i = 2; $i < $number; $i++) {

    if ($number % $i == 0) {

        $isPrime = false;

        break;
    }
}

if ($isPrime) {
    echo "Prime number";
}
else {
    echo "Non-prime number";
}

echo "<hr>";
?>