<?php
// QUESTION 3 

echo "<h2 style='color: darkorange;'>Question 3: Odd and Even Numbers</h2>";


// This question is about printing odd numbers from 2 to 20 and even numbers from 35 to 7.


echo "<p style='color: black;'>Answer:</p>";

echo "Odd numbers: ";

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }

}

echo "<br><br>";

echo "Even numbers: ";

for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }

}

echo "<hr>";
?>