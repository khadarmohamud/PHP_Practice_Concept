<?php
/**
 * Assignment 1 - Question 9
 * Task: Check whether a number is prime or non-prime.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

function isPrimeNumber($n) {
    if ($n <= 1) {
        return false;
    }
    if ($n === 2) {
        return true;
    }
    if ($n % 2 === 0) {
        return false;
    }
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

function checkPrime($number) {
    global $newline;
    if (isPrimeNumber($number)) {
        echo "Number $number is PRIME." . $newline;
    } else {
        echo "Number $number is NON-PRIME." . $newline;
    }
}

echo "--- Question 9: Check Prime or Non-Prime ---" . $newline;

$num = isset($argv[1]) ? (int)$argv[1] : 29;
checkPrime($num);

if (!isset($argv[1])) {
    echo $newline . "Additional Demonstration:" . $newline;
    $testValues = [1, 2, 4, 17, 21, 97, 100];
    foreach ($testValues as $val) {
        checkPrime($val);
    }
}
?>
