<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform calculation based on the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                $operationName = "Addition";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $operationName = "Subtraction";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $operationName = "Multiplication";
                break;
            case 'divide':
                // Check for division by zero
                if ($num2 == 0) {
                    $result = "Error: Division by zero";
                } else {
                    $result = $num1 / $num2;
                }
                $operationName = "Division";
                break;
            default:
                $result = "Invalid operation";
                $operationName = "";
        }

        // Display the result
        echo "<h2>Result:</h2>";
        echo "Operation: $operationName<br>";
        echo "Number 1: $num1<br>";
        echo "Number 2: $num2<br>";
        echo "Result: $result<br>";
    }
    ?>
</body>
</html>
