<?php
/**
 * Assignment 1 - Question 8
 * Task: Create a multiplication table up to 12 x 12 using nested loops.
 */

$isCli = (PHP_SAPI === 'cli');
$newline = $isCli ? PHP_EOL : "<br>";

echo "--- Question 8: Multiplication Table (12 x 12) ---" . $newline . $newline;

if (!$isCli) {
    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
    echo "<tr style='background-color: #f2f2f2;'><th>&times;</th>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        echo "<th style='background-color: #f2f2f2;'>$row</th>";
        for ($col = 1; $col <= 12; $col++) {
            $product = $row * $col;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    // Header row for CLI
    echo sprintf("%4s |", "x");
    for ($col = 1; $col <= 12; $col++) {
        echo sprintf("%4d", $col);
    }
    echo PHP_EOL . str_repeat("-", 55) . PHP_EOL;

    // Table body using nested loops
    for ($row = 1; $row <= 12; $row++) {
        echo sprintf("%4d |", $row);
        for ($col = 1; $col <= 12; $col++) {
            $product = $row * $col;
            echo sprintf("%4d", $product);
        }
        echo PHP_EOL;
    }
}
?>
