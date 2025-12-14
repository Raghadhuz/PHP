<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Basic Calculator</h2>

<form method="post">
    <input type="number" name="num1" placeholder="First number" required>
    
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    
    <input type="number" name="num2" placeholder="Second number" required>
    
    <button type="submit">Calculate</button>
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["operation"];
    $result = "";

    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;

        case "-":
            $result = $num1 - $num2;
            break;

        case "*":
            $result = $num1 * $num2;
            break;

        case "/":
            if ($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
    }

    echo "<strong>Result: </strong> $result";
}
?>

</body>
</html>
