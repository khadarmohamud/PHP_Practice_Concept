<?php
/**
 * Assignment 1 - Question 3
 * Task: Print odd numbers from 2 to 20 and even numbers from 35 to 7.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

echo "--- Question 3: Odd & Even Number Ranges ---" . $newline . $newline;

// Part 1: Odd numbers from 2 to 20
echo "1. Odd numbers from 2 to 20:" . $newline;
$oddNumbers = [];
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 !== 0) {
        $oddNumbers[] = $i;
    }
}
echo implode(", ", $oddNumbers) . $newline . $newline;

// Part 2: Even numbers from 35 down to 7
echo "2. Even numbers from 35 down to 7:" . $newline;
$evenNumbers = [];
for ($j = 35; $j >= 7; $j--) {
    if ($j % 2 === 0) {
        $evenNumbers[] = $j;
    }
}
echo implode(", ", $evenNumbers) . $newline;
?>
