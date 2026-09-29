<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    <?php

    $name = "Ali";
    $age = 20;

    echo $name . "<br>";
    echo $age . "<br>";
    $num1 = 10; 
    $num2 = 20;
if ($num1 > $num2) {
    echo "$num1 is greater than $num2";
} elseif ($num2 > $num1) {
    echo "$num2 is greater than $num1";
} else {
    echo "Both Are Equal";
}

    echo "<br>";


    $day = 3;

    switch ($day) {
        case 1:
            echo "Monday";
            break;

        case 2:
            echo "Tuesday";
            break;

        case 3:
            echo "Wednesday";
            break;

        case 4:
            echo "Thursday";
            break;

        case 5:
            echo "Friday";
            break;

        default:
            echo "Invalid day";
    }

    ?>
</body>
</html>
