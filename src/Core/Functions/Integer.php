<?php

$DIGITS = "0123456789";

/**
 * Check if STRING has only NUMBERS.
 *
 * @param $string
 * @return bool Returns TRUE if provided STRING has only NUMBERS.
 */
function hasOnlyNumeric($string)
{
    return is_numeric($string);
}
