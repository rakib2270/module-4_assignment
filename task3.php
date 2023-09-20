<?php


$number1 = 0;
$number2= 1;

echo "First 10 Fibonacci numbers less than or equal to 100:".PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
  
    $next = $number1 + $number2;

       if ($next > 100) {
        break;
        }

    echo $next . ' ';

    // Update values for the next iteration
    $number1 = $number2;
    $number2 = $next;
}
