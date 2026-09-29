<?php
//  QUESTION 4

echo "<h2 style='color: navy;'>Question 4: Numbers Divisible by 2 and 5</h2>";


// This question is about finding numbers between 50 and 2 that are divisible by both 2 and 5.


echo "<p style='color: black;'>Answer:</p>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }

}

echo "<hr>";

?>