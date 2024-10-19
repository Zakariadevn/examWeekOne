<?php 


$bangla = 86;
$english = 99;
$math = 81;
$physics = 87;
$chemistry = 83;

function calculateResult($marks) {

   global $bangla, $english, $math, $physics, $chemistry;


    $totalMarks = $bangla + $english + $math + $physics + $chemistry;
    $averageMarks = $totalMarks / 5;

    switch (true) {
        case $averageMarks >= 80:
            $grade = "A+";
            break;
        case $averageMarks >= 70:
            $grade = "A";
            break;
        case $averageMarks >= 60:
            $grade = "A-";
            break;
        case $averageMarks >= 50:
            $grade = "B";
            break;
        case $averageMarks >= 40:
            $grade = "C";
            break;
        case $averageMarks >= 33:
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    echo "Total Marks: " . $totalMarks . "\n";
    echo   "<br>";
    echo "Average Marks: " . $averageMarks . "\n";
    echo   "<br>";
    echo "Grade: " . $grade . "\n";
}

// Sample usage
$marks = [80, 66, 65, 77, 45];
calculateResult($marks);
