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
    global $DIGITS;

    $characters = str_split($string);

    foreach ($characters as $character) {
        if (!strpos($DIGITS, strtolower($character))) {
            return FALSE;
        }
    }

    return TRUE;
}
