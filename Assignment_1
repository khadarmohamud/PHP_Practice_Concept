<?php
/**
 * Assignment 1 - Question 1
 * Task: Compare three integer numbers and print the greatest and smallest number.
 */

// Helper to determine line break based on execution environment (CLI vs Web Browser)
$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

// Input numbers (can be passed via CLI arguments or default sample values)
$num1 = isset($argv[1]) ? (int)$argv[1] : 25;
$num2 = isset($argv[2]) ? (int)$argv[2] : 14;
$num3 = isset($argv[3]) ? (int)$argv[3] : 42;

echo "--- Question 1: Greatest and Smallest of Three Numbers ---" . $newline;
echo "Input Numbers: $num1, $num2, $num3" . $newline;

// Finding Greatest using conditional logic
$greatest = $num1;
if ($num2 > $greatest) {
    $greatest = $num2;
}
if ($num3 > $greatest) {
    $greatest = $num3;
}

// Finding Smallest using conditional logic
$smallest = $num1;
if ($num2 < $smallest) {
    $smallest = $num2;
}
if ($num3 < $smallest) {
    $smallest = $num3;
}

echo "Greatest Number: " . $greatest . $newline;
echo "Smallest Number: " . $smallest . $newline;
?>
