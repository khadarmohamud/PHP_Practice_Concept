# PHP Variables, If-Else, and Switch Statement

## 1. PHP Variables

A variable is a container used to store data, such as a name, age, or number.

### Example

```php
<?php
$name = "Ali";
$age = 20;
$price = 10.5;
$isStudent = true;

echo $name;
echo "<br>";
echo $age;
?>
```

### Explanation of Variables

* `$name`: Stores a person's name.
* `$age`: Stores a person's age.
* `$price`: Stores a price or decimal number.
* `$isStudent`: Stores a true or false value.

### Important Rules

* A PHP variable starts with the `$` symbol.
* A variable name must start with a letter or underscore after `$`.
* Variable names are case-sensitive.
* Use `=` to assign a value to a variable.
* Use `echo` to display a variable's value.

### Output

```text
Ali
20
```

## 2. If, Elseif, and Else

These statements are used to make decisions based on conditions.

### Example

```php
<?php
$a = 20;
$b = 10;

if ($a > $b) {
    echo "$a is greater than $b";
} elseif ($a < $b) {
    echo "$a is less than $b";
} else {
    echo "$a is equal to $b";
}
?>
```

### Explanation

* `if`: Checks the first condition.
* `elseif`: Checks another condition if the first is false.
* `else`: Runs when all previous conditions are false.
* `<br>`: Moves the output to a new line.

### Output

```text
20 is greater than 10
```

## 3. Switch Statement

A switch statement is used to select one option from multiple cases.

### Example

```php
<?php
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

    default:
        echo "Invalid day";
}
?>
```

### Explanation

* `switch`: Checks the value of a variable.
* `case`: Defines a possible value.
* `break`: Stops the switch after a matching case.
* `default`: Runs when no case matches.

### Output

```text
Wednesday
```
