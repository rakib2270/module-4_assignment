<?php

// Task 4
$studentsGrades =[
    ['Math' => 85, 'English' => 78, 'Science' => 92],
    ['Math' => 88, 'English' => 90, 'Science' => 86],
    ['Math' => 75, 'English' => 82, 'Science' => 78]
];

// calculate and print the average grade for each student
function calculateAndPrintAverageGrades($studentsGrades) {
    foreach ($studentsGrades as $student) {
        $total = array_sum($student);
        $average = $total / count($student);
        echo "Student Grades: " . implode(', ', $student). ". ";
        echo "Average Grade: " . round($average, 2) . "<br>";
    }
}

calculateAndPrintAverageGrades($studentsGrades);