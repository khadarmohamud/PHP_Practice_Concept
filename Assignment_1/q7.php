<?php
/**
 * Assignment 1 - Question 7
 * Task: Calculate the HCF of two integers.
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

function calculateHCF($a, $b) {
    $num1 = abs($a);
    $num2 = abs($b);

    if ($num1 === 0) return $num2;
    if ($num2 === 0) return $num1;

    while ($num2 != 0) {
        $remainder = $num1 % $num2;
        $num1 = $num2;
        $num2 = $remainder;
    }
    return $num1;
}

echo "--- Question 7: Calculate HCF (GCD) of Two Integers ---" . $newline;

$a = isset($argv[1]) ? (int)$argv[1] : 36;
$b = isset($argv[2]) ? (int)$argv[2] : 60;

echo "Integer 1: $a" . $newline;
echo "Integer 2: $b" . $newline;
echo "HCF: " . calculateHCF($a, $b) . $newline;

if (!isset($argv[1])) {
    echo $newline . "Additional Examples:" . $newline;
    $pairs = [[48, 18], [101, 10], [56, 98]];
    foreach ($pairs as $pair) {
        echo "HCF of {$pair[0]} and {$pair[1]} = " . calculateHCF($pair[0], $pair[1]) . $newline;
    }
}
?>
