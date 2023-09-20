<?php
// Print Even Numbers Using a for loop
function printEvenNumbersfor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
}
echo "Printed Even Numbers Using For Loop- ". printEvenNumbersfor(2, 20, 2).PHP_EOL;



// Print Even Numbers Using a while loop
function printEvenNumberswhile($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        echo $current . ' ';
        $current += $step;
    }
}
echo "Printed Even Numbers Using While Loop- ". printEvenNumberswhile(2, 20, 2).PHP_EOL;

// Print Even Numbers Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $current = $start;
    do {
        echo $current . ' ';
        $current += $step;
    } while ($current <= $end);
}
echo "Printed Even Numbers Using Do While Loop- ". printEvenNumberswhile(2, 20, 2).PHP_EOL;