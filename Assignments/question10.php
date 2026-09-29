<?php

// QUESTION 10 

echo "<h2 style='color: navy;'>Question 10: Prime Numbers from 10 to 50</h2>";

// This question is about printing all prime numbers between 10 and 50.


echo "<p style='color: black;'>Answer:</p>";

for ($number = 10; $number <= 50; $number++) {

    $isPrime = true;

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {

            $isPrime = false;

            break;
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}

?>

