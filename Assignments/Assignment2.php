<?php
//  Q1 One-dimensional array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// Print all elements
foreach ($array as $value) {
    echo $value . " ";
}

echo "<br>";

// Total of all elements
$total = 0;

foreach ($array as $value) {
    $total += $value;
}

echo "Total = " . $total . "<br>";

// Total of even elements
$evenTotal = 0;

foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";

// Total of odd elements
$oddTotal = 0;

foreach ($array as $value) {
    if ($value % 2 != 0) {
        $oddTotal += $value;
    }
}

echo "Total of odd elements = " . $oddTotal . "<br>";

// Minimum element and its positions
$min = $array[0];

foreach ($array as $value) {
    if ($value < $min) {
        $min = $value;
    }
}

echo "Minimum = " . $min . "<br>";
echo "Positions of minimum: ";

foreach ($array as $index => $value) {
    if ($value == $min) {
        echo $index . " ";
    }
}

echo "<br>";

// Maximum element and its positions
$max = $array[0];

foreach ($array as $value) {
    if ($value > $max) {
        $max = $value;
    }
}

echo "Maximum = " . $max . "<br>";
echo "Positions of maximum: ";

foreach ($array as $index => $value) {
    if ($value == $max) {
        echo $index . " ";
    }
}
echo "<br><br>";

// Q2 Two-dimensional associative array
$array = [

    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]

];

echo "<table border='1' cellspacing='0' cellpadding='8'>";

echo "<tr style='background-color: lightgray;'>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($array as $row => $columns) {

    echo "<tr>";

    echo "<td style='background-color: lightgray;'><b>$row</b></td>";

    echo "<td>" . $columns["Red"] . "</td>";
    echo "<td>" . $columns["Green"] . "</td>";
    echo "<td>" . $columns["Blue"] . "</td>";

    echo "</tr>";
}

echo "</table>";

echo "<br><br>";

//Q3 Square two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$oddTotal = 0;
$evenTotal = 0;
$total = 0;

$min = $array[0][0];
$max = $array[0][0];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {

        $value = $array[$i][$j];

        $total += $value;

        if ($value % 2 == 0) {
            $evenTotal += $value;
        } else {
            $oddTotal += $value;
        }

        if ($value < $min) {
            $min = $value;
        }

        if ($value > $max) {
            $max = $value;
        }
    }
}


/* Row totals */

$row1 = 2 + (-6) + 8;
$row2 = -6 + 1 + 6;
$row3 = 7 + 8 + (-6);


/* Column totals */

$column1 = 2 + (-6) + 7;
$column2 = -6 + 1 + 8;
$column3 = 8 + 6 + (-6);


/* Diagonal totals */

$diagonal1 = 2 + 1 + (-6);
$diagonal2 = 8 + 1 + 7;


/* Table */

echo "<table border='1' cellpadding='7' cellspacing='0'
style='border-collapse:collapse; text-align:center;'>";


echo "<tr>";
echo "<td colspan='5'>Total odd elements = $oddTotal</td>";
echo "</tr>";


echo "<tr>";
echo "<td colspan='5'>Total even elements = $evenTotal</td>";
echo "</tr>";


/* First row */

echo "<tr>";

echo "<td style='background-color:gray;'>$diagonal1</td>";
echo "<td>$column1</td>";
echo "<td>$column2</td>";
echo "<td>$column3</td>";
echo "<td style='background-color:gray;'>$diagonal2</td>";

echo "</tr>";


/* Second row */

echo "<tr>";

echo "<td>$row1</td>";
echo "<td>2</td>";
echo "<td>-6</td>";
echo "<td>8</td>";
echo "<td>$row1</td>";

echo "</tr>";


/* Third row */

echo "<tr>";

echo "<td>$row2</td>";
echo "<td>-6</td>";
echo "<td>1</td>";
echo "<td>6</td>";
echo "<td>$row2</td>";

echo "</tr>";


/* Fourth row */

echo "<tr>";

echo "<td>$row3</td>";
echo "<td>7</td>";
echo "<td>8</td>";
echo "<td>-6</td>";
echo "<td>$row3</td>";

echo "</tr>";


/* Fifth row */

echo "<tr>";

echo "<td style='background-color:gray;'>$diagonal2</td>";
echo "<td>$column1</td>";
echo "<td>$column2</td>";
echo "<td>$column3</td>";
echo "<td style='background-color:gray;'>$diagonal1</td>";

echo "</tr>";


/* Total */

echo "<tr>";
echo "<td colspan='5'>Total all elements = $total</td>";
echo "</tr>";


/* Minimum */

echo "<tr>";
echo "<td colspan='5'>";

echo "Min element is: $min in 3 positions:<br>";
echo "[0,1,], [1,0,], and [2,2,],";

echo "</td>";
echo "</tr>";


/* Maximum */

echo "<tr>";
echo "<td colspan='5'>";

echo "Maximum element is: $max in 2 positions:<br>";
echo "[0,2,], and [2,1,],";

echo "</td>";
echo "</tr>";


echo "</table>";

echo "<br><br>";

//Q4  Associative two-dimensional array
$array = [

    [
        "ID" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    [
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    [
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]

];

echo "<table border='1' cellspacing='0' cellpadding='8'>";

echo "<tr style='background-color: lightgray;'>";

echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";

echo "</tr>";

foreach ($array as $student) {

    echo "<tr>";

    echo "<td style='background-color: lightgray;'>";
    echo $student["ID"];
    echo "</td>";

    echo "<td>";
    echo $student["Name"];
    echo "</td>";

    echo "<td>";
    echo $student["Phone"];
    echo "</td>";

    echo "<td>";
    echo $student["Address"];
    echo "</td>";
    echo "</tr>";

}


echo "</table>";
echo "<br><br>";

//Q5  Student transcript
$transcript = [

    "Semester 1" => [

        [
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ],

    "Semester 2" => [

        [
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],

        [
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ]

];

echo "<table border='1' cellspacing='0' cellpadding='8'>";

echo "<tr style='background-color: lightgray;'>";

echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";

echo "</tr>";

foreach ($transcript as $semester => $subjects) {

    $first = true;

    foreach ($subjects as $student) {

        echo "<tr>";

        if ($first) {

            echo "<td rowspan='3'>";
            echo $semester;
            echo "</td>";

            $first = false;
        }

        echo "<td>" . $student["Course"] . "</td>";
        echo "<td>" . $student["CW1"] . "</td>";
        echo "<td>" . $student["MidTerm"] . "</td>";
        echo "<td>" . $student["CW2"] . "</td>";
        echo "<td>" . $student["Final"] . "</td>";
        echo "<td>" . $student["Total"] . "</td>";
        echo "<td>" . $student["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";
?>