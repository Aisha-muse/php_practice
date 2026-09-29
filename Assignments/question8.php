<?php
// QUESTION 8 

echo "<h2 style='color: navy;'>Question 8: Multiplication Table</h2>";


// This question is about creating a multiplication table up to 12 x 12 using nested loops.


echo "<p style='color: black;'>Answer:</p>";

echo "<table border='1'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";

    }

    echo "</tr>";
}

echo "</table>";

echo "<hr>";
?>