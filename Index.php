
<?php

// 1. INDEXED ARRAY


echo "1. Indexed Array";

$numbers = [10, 20, 30, 40, 50];

foreach ($numbers as $number) {
    echo $number . "<br>";
}



// 2. ASSOCIATIVE ARRAY


echo "2. Associative Array";

$student = [
    "name" => "Ali",
    "age" => 20,
    "city" => "Mogadishu"
];

echo $student["name"] . "<br>";
echo $student["age"] . "<br>";
echo $student["city"] . "<br>";



// 3. MULTIDIMENSIONAL ARRAY


echo "3. Multidimensional Array";

$students = [
    ["Ali", 20, "CA221"],
    ["Ahmed", 22, "CA223"],
    ["Amina", 19, "CA225"]
];

foreach ($students as $student) {
    echo $student[0] . " ";
    echo $student[1] . " ";
    echo $student[2] . "<br>";
}


// 4. ARRAY FUNCTIONS


echo "4. Array Functions";

$numbers = [5, 10, 15, 20];

echo "Count: " . count($numbers) . "<br>";
echo "Sum: " . array_sum($numbers) . "<br>";
echo "Maximum: " . max($numbers) . "<br>";
echo "Minimum: " . min($numbers) . "<br>";

sort($numbers);

echo "Sorted Array: ";
print_r($numbers);
echo "<br>";



// 5. CREATE A FUNCTION


echo "5. Create a Function";

function sayHello() {
    echo "Hello Students,<br>" ;
}

sayHello();

// 6. FUNCTION WITH PARAMETERS


echo "6. Function with Parameters";

function greet($name) {
    echo "Hello " . $name;
}

greet("Ali");

// 7. FUNCTION WITH RETURN


echo "7. Function with Return";

function add($a, $b) {
    return $a + $b;
}

$result = add(10, 20);

echo "Result: " . $result;



// 8. DEFAULT ARGUMENT


echo "8. Default Argument";

function welcome($name = "Student") {
    echo "Welcome " . $name;
}

welcome();
echo "<br>";
welcome("Ali");



// 9. PASS BY REFERENCE


echo "9. Pass by Reference";

function changeNumber(&$number) {
    $number = 100;
}

$x = 10;

changeNumber($x);

echo "Number: " . $x;



?>