<?php

// print the first 15 Fibonacci numbers

function printFibonacci($count) {
    $number1 = 0;
    $number2= 1;
    echo "First $count Fibonacci numbers:\n";

    for ($i = 1; $i <= $count; $i++) {
        echo $number1 . ' ';

        // Calculate the next Fibonacci number
        $next = $number1 + $number2;

        // Update values for the next iteration
        $number1 = $number2;
        $number2 = $next;
    }
}


printFibonacci(15);
