<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //One-Dimensional Array
$arr = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

$total = 0;
$even = 0;
$odd = 0;

$min = $arr[0];
$max = $arr[0];

echo "Array elements: ";

foreach ($arr as $value) {
    echo $value . " ";
    $total = $total + $value;

    if ($value % 2 == 0) {
        $even = $even + $value;
    } else {
        $odd = $odd + $value;
    }

    if ($value < $min) {
        $min = $value;
    }

    if ($value > $max) {
        $max = $value;
    }
}

echo "<br>Total: " . $total;
echo "<br>Even total: " . $even;
echo "<br>Odd total: " . $odd;

echo "<br>Minimum: " . $min;
echo "<br>Minimum positions: ";

foreach ($arr as $key => $value) {
    if ($value == $min) {
        echo ($key + 1) . " ";
    }
}

echo "<br>Maximum: " . $max;
echo "<br>Maximum positions: ";

foreach ($arr as $key => $value) {
    if ($value == $max) {
        echo ($key + 1) . " ";
    }
}
?>
//Two-Dimensional Associative Array

<table border="1" cellpadding="5">
    <?php
    $colors = [
        "Light" => [
            "Red" => "Light Red",
            "Green" => "Light Green",
            "Blue" => "Light Blue"
        ],
        "Normal" => [
            "Red" => "Normal Red",
            "Green" => "Normal Green",
            "Blue" => "Normal Blue"
        ],
        "Dark" => [
            "Red" => "Dark Red",
            "Green" => "Dark Green",
            "Blue" => "Dark Blue"
        ]
    ];

    echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";

    foreach ($colors as $row => $values) {
        echo "<tr>";
        echo "<th>" . $row . "</th>";

        foreach ($values as $value) {
            echo "<td>" . $value . "</td>";
        }

        echo "</tr>";
    }
    ?>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>

    <?php
    $students = [
        "CA221" => [
            "Name" => "Mohamed Ahmed Ali",
            "Phone" => "0648440403",
            "Address" => "Laba Dhagax, Wardhiigley"
        ],
        "CA223" => [
            "Name" => "Ahmed Abdi Jama",
            "Phone" => "0647223201",
            "Address" => "Taleex, Hodan"
        ],
        "CA221_2" => [
            "Name" => "Khadar Nur Adan",
            "Phone" => "0614487537",
            "Address" => "Macmacaanka, Kaxda"
        ]
    ];

    foreach ($students as $id => $info) {
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $info["Name"] . "</td>";
        echo "<td>" . $info["Phone"] . "</td>";
        echo "<td>" . $info["Address"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>




</body>
</html>
