<?php
    $welcome_msg = "Welcome to the Calculator Page </br>";
    echo $welcome_msg;
    echo "</br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="numone">Enter first number</label>
        <input type="text" name="numone">
        <br><br>
        <label for="numtwo">Enter second number</label>
        <input type="text" name="numtwo">
        <br><br>
        <label for="operation">Select operation</label>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="modulus">Modulus</option>
            <option value="exponent">Exponent</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $numone = $_POST['numone'];
        $numtwo = $_POST['numtwo'];
        $operation = $_POST['operation'];

        if ($operation == 'add') {
            $result = $numone + $numtwo;
            echo "The sum of $numone and $numtwo is $result";
        } elseif ($operation == 'subtract') {
            $result = $numone - $numtwo;
            echo "The difference of $numone and $numtwo is $result";
        } elseif ($operation == 'multiply') {
            $result = $numone * $numtwo;
            echo "The product of $numone and $numtwo is $result";
        } elseif ($operation == 'divide') {
            $result = $numone / $numtwo;
            echo "The division of $numone and $numtwo is $result";
        } elseif ($operation == 'modulus') {
            $result = $numone % $numtwo;
            echo "The modulus of $numone and $numtwo is $result";
        } elseif ($operation == 'exponent') {
            $result = $numone ** $numtwo;
            echo "The exponent of $numone and $numtwo is $result";
        }
    }
?>