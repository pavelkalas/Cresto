<?php

include_once "src/Utils/Exception.php";

$ALPHABET = "qwertzuiopasdfghjklyxcvbnm";

/**
 * Removes specified symbols at LEFT side of the provided STRING.
 *
 * @param $string Trims a string.
 * @param $character Characters to TRIM.
 * @return string
 */
function trimLeft($string, $character = ' ')
{
    return ltrim($string, $character);
}

/**
 * Removes specified symbols at RIGHT side of the provided STRING.
 *
 * @param $string Trims a string.
 * @param $character Characters to TRIM.
 * @return string
 */
function trimRight($string, $character = ' ')
{
    return rtrim($string, $character);
}

/**
 * Removes specified symbols at LEFT & RIGHT side of the provided STRING.
 *
 * @param $string Trims a string
 * @param $character Characters to TRIM.
 * @return string
 */
function trimBoth($string, $character = ' ') {
    return trim($string);
}

/**
 * Append ANOTHER STRING to STRING to LEFT side.
 *
 * @param $string Default string.
 * @param $strToAppend New string to appendion.
 * @param $spaceBetween Makes (one, single) space between DEFAULT STRING and STRING TO APPEND.
 * @return string
 */
function appendLeft($string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        return $strToAppend . " " . $string;
    } else {
        return $strToAppend . $string;
    }
}

/**
 * Append ANOTHER STRING to STRING to RIGHT side.
 *
 * @param $string Default string.
 * @param $strToAppend New string to appendion.
 * @param $spaceBetween Makes (one, single) space between DEFAULT STRING and STRING TO APPEND.
 * @return string
 */
function appendRight($string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        return $string . " " . $strToAppend;
    } else {
        return $string . $strToAppend;
    }
}

/**
 * Converts string to an ARRAY of CHARACTERS.
 *
 * @param $string Provided string to be converted to char array.
 * @return array|null Returns a array of CHARACTERS if not EMPTY or NULL.
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

/**
 * Converts text to uppercase
 *
 * @param $string String to be uppercased.
 * @return string Returns uppered text.
 */
function toUpperCase($string) {
    return strtoupper($string);
}

/**
 * Converts text to lowercase.
 *
 * @param $string String to be lowercased.
 * @return string Returns lowered text.
 */
function toLowerCase($string) {
    return strtolower($string);
}

/**
 * Converts first letter in text to uppercase
 *
 * @param $string String to be capialized.
 * @return string Returns capitalized text text.
 */
function capitalize($string) {
    $string[0] = strtoupper($string[0]);
    return $string;
}
