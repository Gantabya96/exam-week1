<?php

$marks = [45, 55, 70, 80, 59];

function resultCalculation($marks) {
    $totalMarks = 0;
    $countSubjects = count($marks);

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Invalid mark range. Please check the mark again.<br/>";
            return;
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "You are failed. <br/>";
            return;
        }
    }

    foreach ($marks as $mark) {
        $totalMarks += $mark;
    }

    $averageMarks = $totalMarks / $countSubjects;

    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }
//----------------------Result--------------------------------------//

    echo "Total Marks: $totalMarks <br/>";
    echo "Average Marks: $averageMarks <br/>";
    echo "Grade: $grade <br/>";
}

resultCalculation($marks);


?>

