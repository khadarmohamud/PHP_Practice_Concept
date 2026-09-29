<?php
/**
 * Assignment 1 - Question 10
 * Task: Print prime numbers from 10 to 50.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

function isPrime($n) {
    if ($n <= 1) return false;
    if ($n === 2) return true;
    if ($n % 2 === 0) return false;
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i === 0) return false;
    }
    return true;
}

echo "--- Question 10: Prime Numbers from 10 to 50 ---" . $newline;

$primeNumbers = [];
for ($i = 10; $i <= 50; $i++) {
    if (isPrime($i)) {
        $primeNumbers[] = $i;
    }
}

echo "Prime numbers between 10 and 50 are:" . $newline;
echo implode(", ", $primeNumbers) . $newline;
?>
