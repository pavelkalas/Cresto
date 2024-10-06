<?php

/**
 * Gets average number from numerical array.
 *
 * @param $array Array of numbers.
 * @return float|int Average of array.
 */
function getNumericalAverage($array)
{
    $sum = 0;

    foreach ($array as $key) {
        if (is_numeric($key)) {
            $sum += $key;
        }
    }

    return $sum / count($array);
}

/**
 * Gets a maximum value from numerical array.
 *
 * @param $array Array of numbers.
 * @return float|int|string Maximum value in array.
 */
function getArrayMaximum($array)
{
    $number = 0;

    foreach ($array as $key) {
        if (is_numeric($key) && $key > $number) {
            $number = $key;
        }
    }

    return $number;
}

/**
 * Gets a minimum value from numerical array.
 *
 * @param $array Array of numbers.
 * @return float|int|string Minimum value in array.
 */
function getArrayMinimum($array)
{
    $number = getArrayMaximum($array);

    foreach ($array as $key) {
        if (is_numeric($key) && $key < $number) {
            $number = $key;
        }
    }

    return $number;
}
