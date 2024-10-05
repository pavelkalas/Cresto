<?php

include_once "src/Utils/Exception.php";

$ALPHABET = "qwertzuiopasdfghjklyxcvbnm";

/**
 * Removes specified symbols at LEFT side of the provided STRING.
 *
 * @param $string Trims a string (by refference)
 * @param $character Characters to TRIM.
 * @return void
 */
function trimLeft(&$string, $character = ' ')
{
    $string = ltrim($string, $character);
}

/**
 * Removes specified symbols at RIGHT side of the provided STRING.
 *
 * @param $string Trims a string (by refference)
 * @param $character Characters to TRIM.
 * @return void
 */
function trimRight(&$string, $character = ' ')
{
    $string = rtrim($string, $character);
}

/**
 * Removes specified symbols at LEFT & RIGHT side of the provided STRING.
 *
 * @param $string Trims a string (by refference)
 * @param $character Characters to TRIM.
 * @return void
 */
function trimBoth(&$string, $character = ' ') {
    $string = rtrim($string, $character);
    $string = ltrim($string, $character);
}

/**
 * Append ANOTHER STRING to STRING to LEFT side (by refference)
 *
 * @param $string Default string.
 * @param $strToAppend New string to appendion.
 * @param $spaceBetween Makes (one, single) space between DEFAULT STRING and STRING TO APPEND.
 * @return void
 */
function appendLeft(&$string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        $string = $strToAppend . " " . $string;
    } else {
        $string = $strToAppend . $string;
    }
}

/**
 * Append ANOTHER STRING to STRING to RIGHT side (by refference)
 *
 * @param $string Default string.
 * @param $strToAppend New string to appendion.
 * @param $spaceBetween Makes (one, single) space between DEFAULT STRING and STRING TO APPEND.
 * @return void
 */
function appendRight(&$string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        $string = $string . " " . $strToAppend;
    } else {
        $string = $string . $strToAppend;
    }
}

/**
 * Converts string to an ARRAY of CHARACTERS.
 *
 * @param $string Provided string to be converted to char array.
 * @return array|false|string Returns a array of CHARACTERS if not EMPTY or NULL.
 */
function toCharArray($string) {
    if ($string != NULL && strlen($string) > 0) {
        return str_split($string);
    }

    echo showError("Cannot split STRING to CHARACTER ARRAY because provided STRING is EMPTY!");

    return NULL;
}

/**
 * Checks if a provided string contains only ALPHABET (ignoring upper/lower case and spaces)
 *
 * @param $string String to check
 * @return bool Returns TRUE if all provided characters are LETTERS (ignoring upper/lower case and spaces)
 */
function hasOnlyAlphabet($string)
{
    global $ALPHABET;

    $letters = str_split($string);

    foreach ($letters as $letter) {
        if (!strpos($ALPHABET, strtolower($letter)) && $letter != " ") {
            return FALSE;
        }
    }

    return TRUE;
}
