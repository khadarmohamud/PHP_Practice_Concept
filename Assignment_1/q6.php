<?php
/**
 * Assignment 1 - Question 6
 * Task: Calculate the LCM of two positive integers.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

// Helper function to find HCF (Highest Common Factor) using Euclidean Algorithm
function getHCF($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to calculate LCM: LCM(a, b) = (a * b) / HCF(a, b)
function getLCM($a, $b) {
    if ($a <= 0 || $b <= 0) {
        return "Inputs must be positive integers.";
    }
    return ($a * $b) / getHCF($a, $b);
}

echo "--- Question 6: Calculate LCM of Two Positive Integers ---" . $newline;

$num1 = isset($argv[1]) ? (int)$argv[1] : 12;
$num2 = isset($argv[2]) ? (int)$argv[2] : 18;

echo "Number 1: $num1" . $newline;
echo "Number 2: $num2" . $newline;
echo "LCM: " . getLCM($num1, $num2) . $newline;

if (!isset($argv[1])) {
    echo $newline . "Additional Examples:" . $newline;
    $pairs = [[15, 20], [7, 5], [24, 36]];
    foreach ($pairs as $pair) {
        echo "LCM of {$pair[0]} and {$pair[1]} = " . getLCM($pair[0], $pair[1]) . $newline;
    }
}
?>
