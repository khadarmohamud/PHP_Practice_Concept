## 1. PHP Syntax
PHP code starts with `<?php`. Most PHP statements end with a semicolon (`;`).

## 2. echo and print
Both are used to display text or data in the browser. `echo` can accept multiple parameters, while `print` accepts one.

## 3. Comments
Comments explain code and are not executed by PHP.
- `//` Single-line comment
- `/* */` Multi-line comment
- `#` Single-line comment

## 4. Variables
Variables store values and start with `$`.

Example:
```php
$name = "Ali";
$age = 20;
```

## 5. Data Types
- Integer: Whole numbers, e.g. `10`
- Float: Decimal numbers, e.g. `3.14`
- String: Text, e.g. `"Hello"`
- Boolean: `true` or `false`

## 6. Single and Double Quotes
Single quotes do not normally interpret variables. Double quotes allow variables to be interpreted.

```php
$a = 10;
echo '$a';  // $a
echo "$a";  // 10
```

## 7. Constants
A constant stores a value that cannot be changed during the program.

```php
define("PI", 3.14);
echo PI;
```

## 8. Operators
- Arithmetic: `+ - * / %`
- Assignment: `=`
- Comparison: `== != > < >= <=`
- Logical: `&& || !`
- Increment/Decrement: `++ --`
- Concatenation: `.`
- Ternary: `? :`

## 9. Conditional Statements
Conditional statements make decisions in a program.
- `if`: Runs code when a condition is true.
- `if...else`: Chooses between two paths.
- `elseif`: Checks additional conditions.
- `switch`: Selects a matching case.
- `break`: Stops execution in a switch case or loop.
- `default`: Runs when no switch case matches.

## 10. Ternary Operator
A short form of `if...else`.

```php
$age = 20;
echo $age >= 18 ? "Adult" : "Minor";
```

## 11. Loops
Loops repeat code.
- `while`: Checks the condition before running.
- `do...while`: Runs at least once before checking the condition.
- `for`: Uses initialization, condition, and update.
- `foreach`: Processes each element in an array.

## 12. break and continue
- `break`: Stops the loop.
- `continue`: Skips the current iteration and moves to the next one.

## 13. Nested Loops
A nested loop is a loop inside another loop. It is useful for multiplication tables and rows and columns.

## 14. Operator Precedence
Operator precedence determines which operation is performed first. Parentheses `()` help control the order.
