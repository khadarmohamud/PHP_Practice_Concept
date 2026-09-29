<?php
/**
 * Assignment 1 - Question 5
 * Task: Find the reverse of a given number without using strrev().
 */

$newline = (PHP_SAPI === 'cli') ? PHP_EOL : "<br>";

function reverseNumber($number) {
    $original = $number;
    $reversed = 0;
    $temp = abs($number);

    while ($temp > 0) {
        $remainder = $temp % 10;
        $reversed = ($reversed * 10) + $remainder;
        $temp = (int)($temp / 10);
    }

    if ($number < 0) {
        $reversed = -$reversed;
    }

    return $reversed;
}

echo "--- Question 5: Reverse a Number (without strrev()) ---" . $newline;

$inputNum = isset($argv[1]) ? (int)$argv[1] : 12345;
echo "Original Number: $inputNum" . $newline;
echo "Reversed Number: " . reverseNumber($inputNum) . $newline;

if (!isset($argv[1])) {
    echo $newline . "Additional Examples:" . $newline;
    $examples = [9876, 5001, -4321, 7];
    foreach ($examples as $ex) {
        echo "Original: $ex -> Reversed: " . reverseNumber($ex) . $newline;
    }
}
?>
