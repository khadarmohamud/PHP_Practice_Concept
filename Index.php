<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 15;
$b = 40;
$c = 25;

if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest: " . $greatest . "<br>";
echo"Smallset:" . $smallest ."<br>" ;


$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "Divisible by both 3 and 5";
} elseif ($num % 3 == 0) {
    echo "Divisible by 3";
} elseif ($num % 5 == 0) {
    echo "Divisible by 5";
} else {
    echo "Divisible by neither 3 nor 5 , " ;
}

echo " <br>.Odd numbers from 2 to 20: ";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i   ;
    }
}

echo "<br><br>Even numbers from 35 to 7:<br> ";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br>";
$num = 12345 ; 
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

echo "Reverse:  " . $reverse;

echo "<br>";
$a = 8;
$b = 12;

$lcm = ($a > $b) ? $a : $b;

while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
    $lcm++;
}

echo "LCM: " . $lcm;

echo"<br>";
$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF: " . $hcf;

echo"<br>";
?>

<table border="1" cellpadding="5">
    <caption>Multiplication Table</caption>
<?php
    
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
?>
</table>

<?php
$num = 7;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $num . " is a Prime number";
} else {
    echo $num . " is a Non-prime number";
}
echo"<br>";

for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}



?>



</body>
</html>