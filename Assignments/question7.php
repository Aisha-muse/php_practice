<?php
//  QUESTION 7 
echo "<h2 style='color: darkorange;'>Question 7: HCF</h2>";


// This question is about calculating the Highest Common Factor (HCF) of two numbers.


echo "<p style='color: black;'>Answer:</p>";

$a = 18;
$b = 24;

$hcf = 1;

if ($a < $b) {
    $limit = $a;
}
else {
    $limit = $b;
}

for ($i = 1; $i <= $limit; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }

}

echo "HCF: " . $hcf;

echo "<hr>";

?>