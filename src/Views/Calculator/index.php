<?php

$firstNumber = 0;
$secondNumber = 0;

$result = 0;

if (hasUrlPOST()) {

    $firstNumber = getUrlPOST("first-number");
    $secondNumber = getUrlPOST("second-number");
    $operation = getUrlPOST("operation");
    
    $numbers = $firstNumber . $secondNumber;

    if (hasOnlyNumeric($numbers)) {
        $result = ($firstNumber + $secondNumber);

        switch ($operation) {
            case "addition":
                $result = $firstNumber + $secondNumber;
                break;
                
            case "subtraction":
                $result = $firstNumber - $secondNumber;
                break;

            case "multiplication":
                $result = $firstNumber * $secondNumber;
                break;

            case "division":
                $result = ($firstNumber != 0 && $secondNumber == 0) ? ($firstNumber / $secondNumber) : "Cannot divide by zero.";
                break;
        }

    } else {
        $result = "You not entered numbers!";
    }
}

?>
<div>
    <h1>
        Calculator
    </h1>

    <p>
        Simple calculator to demostrate FORMS
    </p>

    <form action="<?php echo getViewUrl("Calculator"); ?>" method="post">
        <input type="number" name="first-number" required value="<?php echo $firstNumber; ?>">
        <input type="number" name="second-number" required value="<?php echo $secondNumber; ?>">
        <select name="operation">
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
            <option value="division">Division (/)</option>
        </select>
        <input type="submit" value="Get result!">
    </form>

    <p>
        Result: <?php echo $result; ?>
    </p>
</div>
