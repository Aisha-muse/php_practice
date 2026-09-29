<?php
//  QUESTION 6

echo "<h2 style='color: navy;'>Question 6: LCM</h2>";


// This question is about calculating the Least Common Multiple (LCM) of two positive numbers.


echo "<p style='color: black;'>Answer:</p>";

$a = 8;
$b = 12;

if ($a > $b) {
    $lcm = $a;
}
else {
    $lcm = $b;
}

while (true) {

    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }

    $lcm++;
}

echo "LCM: " . $lcm;

echo "<hr>";

?>