<?php

global $firstNumber;
global $secondNumber;

global $result;

include_once "src/Models/Calculator.php";

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
