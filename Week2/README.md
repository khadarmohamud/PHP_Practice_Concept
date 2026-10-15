
## Important Concepts for Exam Preparation

### 1. Array
**Definition:** An array is a variable that stores multiple values under one name.

### 2. Types of Arrays
- **Numerically Indexed Array:** An array that uses numeric indexes starting from 0.
- **Associative Array:** An array that uses named keys to store values.
- **Multidimensional Array:** An array that contains one or more arrays.

### 3. Foreach Loop
**Definition:** `foreach` is a loop used to access each element of an array.

```php
$numbers = array(10, 20, 30);

foreach ($numbers as $n) {
    echo $n;
}
```

### 4. Important Array Functions
- `count()` — Returns the number of elements in an array.
- `is_array()` — Checks whether a variable is an array.
- `in_array()` — Checks whether a value exists in an array.
- `sort()` — Sorts an array in ascending order.
- `rsort()` — Sorts an array in descending order.
- `array_push()` — Adds an element to the end of an array.
- `array_pop()` — Removes the last element of an array.
- `array_merge()` — Combines two or more arrays.
- `array_reverse()` — Reverses the order of elements.
- `explode()` — Converts a string into an array.
- `implode()` — Converts an array into a string.

### 5. Function
**Definition:** A function is a block of code that performs a specific task and can be reused.

**Advantages of Functions:**
- Code reusability.
- Reduces repeated code.
- Helps reduce programming errors.

```php
function writeMsg() {
    echo "Hello World";
}

writeMsg();
```

### 6. Parameters vs Arguments
- **Parameter:** A variable that receives a value in a function definition.
- **Argument:** A value passed to a function when it is called.

```php
function greet($name) {
    echo $name;
}

greet("Ahmed");
```

### 7. Returning a Value
**Definition:** The `return` statement sends a value back from a function to the calling code.

```php
function add() {
    return 5 + 3;
}

echo add();
```

**Output:** `8`

### 8. Passing by Value vs Passing by Reference
- **Passing by Value:** Passes a copy of a value. Changes inside the function do not affect the original variable.
- **Passing by Reference:** Passes a reference to the original variable. Changes inside the function can affect the original variable. It uses `&`.

### 9. Default Argument Value
**Definition:** A default argument is a value assigned to a parameter when no argument is provided.

```php
function greet($name = "Ahmed") {
    echo $name;
}

greet();
```

**Output:** `Ahmed`

### 10. Scope of Variables
- **Local Variable:** A variable declared inside a function and accessible within its local scope.
- **Global Variable:** A variable declared outside a function.
- **Static Variable:** A local variable that retains its value between function calls.
- **Superglobal Variables:** Predefined variables accessible throughout the script, such as `$_GET`, `$_SESSION`, `$_FILES`, `$_SERVER`, and `$GLOBALS`.

### 11. Including Files in PHP
- **`include`:** Includes a file. If the file is missing, PHP gives a warning and continues execution.
- **`require`:** Includes a file. If the file is missing, PHP produces a fatal error and stops execution.
- **`include_once`:** Includes a file only once.
- **`require_once`:** Requires a file only once.

---

## Most Important Topics to Memorize
1. Definition of Array.
2. Three Types of Arrays.
3. `foreach` Loop.
4. Array Functions.
5. Definition and Advantages of Functions.
6. Parameters vs Arguments.
7. `return` Statement.
8. Passing by Value vs Passing by Reference.
9. Default Argument Value.
10. Local, Global, Static, and Superglobal Variables.
11. `include` vs `require`.
