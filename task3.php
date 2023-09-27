<?php

// Task 3

function sortAndPrintGrades($grades) {
    
    // Sort the grades in descending order
    rsort($grades); 
    
    // Print the sorted grades
    print_r($grades); 
}

$grades = array(85, 92, 78, 88, 95);
sortAndPrintGrades($grades);