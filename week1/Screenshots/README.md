# PHP Fundamentals: Variables and Control Structures

## 📌 About This Project

This project demonstrates basic PHP concepts using simple examples. It shows how to store values in variables, compare numbers, and use conditional statements to make decisions.

## 🧠 Concepts Covered

### 1. Variables
Variables store data such as names, ages, and numbers.

```php
$name = "Ali";
$age = 20;
```

### 2. Output with `echo`
The `echo` statement displays text or variable values in the browser.

```php
echo $name;
echo $age;
```

### 3. If, Elseif, and Else
These statements compare two numbers and display which number is greater. If both numbers are equal, the program displays a message.

```php
if ($num1 > $num2) {
    echo "$num1 is greater than $num2";
} elseif ($num2 > $num1) {
    echo "$num2 is greater than $num1";
} else {
    echo "Both Are Equal";
}
```

### 4. Switch Statement
The `switch` statement selects a message based on the value of `$day`.

- `1` → Monday
- `2` → Tuesday
- `3` → Wednesday
- `4` → Thursday
- `5` → Friday
- Other values → Invalid day

### 5. Break Statement
The `break` statement stops the current switch case from continuing into the next case.

## 💻 Example Values

| Variable | Value |
|---|---|
| `$name` | Ali |
| `$age` | 20 |
| `$num1` | 10 |
| `$num2` | 20 |
| `$day` | 3 |

## ▶️ Expected Output

```text
Ali
20
20 is greater than 10
Wednesday
```



**Majid**

PHP Practice — Chapter 2: Fundamentals and Control Structures
