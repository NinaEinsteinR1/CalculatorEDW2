<?php
// PHP Calculator Example

$result = 0;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Perform calculations based on the operation
    switch($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero error!";
            }
            break;
        default:
            $result = "Invalid operation";
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <link rel="stylesheet" href="style2.css">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post">
        <input type="number" name="num1" required="required" placeholder="First Number" />
        <input type="number" name="num2" required="required" placeholder="Second Number" />
        <select name="operation">
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>
