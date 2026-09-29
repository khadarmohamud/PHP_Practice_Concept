<?php
/**
 * Assignment 1 - Question 2
 * Task: Check whether a number is divisible by 3, 5, both, or none.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

function checkDivisibility($number) {
    global $newline;
    echo "Checking Number: $number -> ";
    
    $divisibleBy3 = ($number % 3 === 0);
    $divisibleBy5 = ($number % 5 === 0);

    if ($divisibleBy3 && $divisibleBy5) {
        echo "Divisible by BOTH 3 and 5" . $newline;
    } elseif ($divisibleBy3) {
        echo "Divisible by 3 ONLY" . $newline;
    } elseif ($divisibleBy5) {
        echo "Divisible by 5 ONLY" . $newline;
    } else {
        echo "Divisible by NONE (neither 3 nor 5)" . $newline;
    }
}

echo "--- Question 2: Divisibility Check (3, 5, Both, or None) ---" . $newline;

// If passed via command line argument
if (isset($argv[1])) {
    checkDivisibility((int)$argv[1]);
} else {
    // Demonstration with sample numbers
    $testNumbers = [15, 9, 10, 7, 30, 22];
    foreach ($testNumbers as $num) {
        checkDivisibility($num);
    }
}
?>
