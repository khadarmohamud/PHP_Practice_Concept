<?php
/**
 * Assignment 1 - Question 4
 * Task: Print numbers divisible by both 2 and 5 from 50 to 2.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

echo "--- Question 4: Numbers Divisible by both 2 and 5 (from 50 down to 2) ---" . $newline;

$results = [];
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 === 0 && $i % 5 === 0) {
        $results[] = $i;
    }
}

echo "Numbers: " . implode(", ", $results) . $newline;
?>
