<?php

// Printing numbers of 1 to 50 and skip the multiples of 5 using continue.

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . ' ';
}