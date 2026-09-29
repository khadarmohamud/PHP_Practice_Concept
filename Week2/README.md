## 📌 About This Project

This project explains the basic concepts of Arrays and Functions in PHP.

It contains 10 code examples with simple explanations to help  understand how each code works.

---

## 1. Indexed Array

An indexed array stores multiple values in one variable. Each value has a numeric index starting from `0`.

### Code Explanation

* `$numbers` stores five numbers.
* `foreach` loops through each value in the array.
* `$number` holds the current value.
* `echo` displays each number.
* `<br>` moves each number to a new line.

### Output

```text
10
20
30
40
50
```

---

## 2. Associative Array

An associative array stores data using named keys and values.

### Code Explanation

* `$student` stores information about a student.
* `"name"`, `"age"`, and `"city"` are the keys.
* `"Ali"`, `20`, and `"Mogadishu"` are the values.
* `$student["name"]` accesses the value using its key.
* `echo` displays the student information.

### Output

```text
Ali
20
Mogadishu
```

---

## 3. Multidimensional Array

A multidimensional array is an array that contains other arrays.

### Code Explanation

* `$students` stores information about three students.
* Each inner array contains a name, age, and student ID.
* `foreach` loops through each student's information.
* `$student[0]` accesses the name.
* `$student[1]` accesses the age.
* `$student[2]` accesses the student ID.

### Output

```text
Ali 20 CA221
Ahmed 22 CA223
Amina 19 CA225
```

---

## 4. Array Functions

PHP provides built-in functions to count, calculate, and sort array values.

### Functions Explained

| Function      | Description                              |
| ------------- | ---------------------------------------- |
| `count()`     | Counts the number of elements.           |
| `array_sum()` | Calculates the total of all values.      |
| `max()`       | Finds the largest value.                 |
| `min()`       | Finds the smallest value.                |
| `sort()`      | Sorts values in ascending order.         |
| `print_r()`   | Displays the array in a readable format. |

### Output

```text
Count: 4
Sum: 50
Maximum: 20
Minimum: 5
Sorted Array: Array ( [0] => 5 [1] => 10 [2] => 15 [3] => 20 )
```

---

## 5. Create a Function

A function is a reusable block of code that performs a specific task.

### Code Explanation

* `function` is used to create a function.
* `sayHello()` is the function name.
* `echo` displays a message.
* `sayHello();` calls the function and runs its code.

### Output

```text
Hello Students
```

---

## 6. Function with Parameters

A parameter allows a function to receive a value.

### Code Explanation

* `greet()` is the function name.
* `$name` is the parameter.
* `"Ali"` is the argument passed to the function.
* The function displays a greeting using the given name.

### Output

```text
Hello Ali
```

---

## 7. Function with Return

The `return` statement sends a value back from a function.

### Code Explanation

* `$a` and `$b` receive two numbers.
* `return $a + $b;` returns their sum.
* `add(10, 20)` calls the function.
* `$result` stores the returned value.
* `echo` displays the result.

### Output

```text
Result: 30
```

---

## 8. Default Argument

A default argument is a value used when no argument is provided.

### Code Explanation

* `$name = "Student"` sets a default value.
* `welcome()` uses the default value.
* `welcome("Ali")` uses the name provided in the function call.

### Output

```text
Welcome Student
Welcome Ali
```

---

## 9. Pass by Reference

Pass by reference allows a function to change the original variable.

### Code Explanation

* `$x` starts with the value `10`.
* `&$number` passes a reference to the original variable.
* The function changes the value to `100`.
* After the function call, `$x` becomes `100`.

### Output

```text
Number: 100
```

---

## 10. Include Another PHP File

### Description

The `include` statement loads another PHP file into the current file.

### Code Explanation

* `message.php` contains a function named `message()`.
* `include "message.php";` loads the file.
* `message();` calls the function from the included file.

### Output

```text
Welcome to PHP
```


⭐ Thank you for visiting my project!
