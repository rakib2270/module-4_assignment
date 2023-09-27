<?php
// Task 2
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function ($num) {
        return $num % 2 != 0;
    });
}

$numbers = range(1, 10); 
removeEvenNumbers($numbers);
print_r($numbers);