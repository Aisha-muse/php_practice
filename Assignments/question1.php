<?php

// QUESTION 1 

echo "<h2 style='color: darkorange;'>Question 1: Greatest and Smallest Number</h2>";

// // This question is about comparing three numbers and finding the greatest and smallest number.


echo "<p style='color: black;'>Answer:</p>";

$a = 25;
$b = 10;
$c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "Greatest: $greatest <br>";
echo "Smallest: $smallest";

echo "<hr>";

?>