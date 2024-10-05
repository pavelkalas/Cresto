<?php

$ALPHABET = "qwertzuiopasdfghjklyxcvbnm";

function trimLeft(&$string, $character = ' ')
{
    $string = ltrim($string, $character);
}

function trimRight(&$string, $character = ' ')
{
    $string = rtrim($string, $character);
}

function trimBoth(&$string, $character = ' ') {
    $string = rtrim($string, $character);
    $string = ltrim($string, $character);
}

function appendLeft(&$string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        $string = $strToAppend . " " . $string;
    } else {
        $string = $strToAppend . $string;
    }
}

function appendRight(&$string, $strToAppend, $spaceBetween = FALSE)
{
    if ($spaceBetween) {
        $string = $string . " " . $strToAppend;
    } else {
        $string = $string . $strToAppend;
    }
}

function toCharArray($string) {
    if ($string != NULL && strlen($string) > 0) {
        return str_split($string);
    }

    return NULL;
}

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
