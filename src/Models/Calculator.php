<?php

$firstNumber = 0;
$secondNumber = 0;

$result = 0;

if (hasAnyPOST()) {

    $firstNumber = getPOST("first-number");
    $secondNumber = getPOST("second-number");
    $operation = getPOST("operation");

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
