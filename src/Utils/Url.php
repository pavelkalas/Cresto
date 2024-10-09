<?php

/**
 * @param $parameterName GET parameter name
 * @param $removeValueWhitespaces Ignores parameter value spaces
 * @return mixed|string|null Returns VALUE of POST parameter if is not NULL
 */
function getPOST($parameterName, $removeValueWhitespaces = FALSE)
{
    if (isset($_POST[$parameterName])) {
        if ($removeValueWhitespaces) {
            return trim($_POST[$parameterName]);
        } else {
            return $_POST[$parameterName];
        }
    }

    return NULL;
}

/**
 * @param $parameterName GET parameter name
 * @param $removeValueWhitespaces Ignores parameter value spaces
 * @return mixed|string|null Returns VALUE of GET parameter if is not NULL
 */
function getGET($parameterName, $removeValueWhitespaces = FALSE)
{
    if (isset($_GET[$parameterName])) {
        if ($removeValueWhitespaces) {
            return trim($_GET[$parameterName]);
        } else {
            return $_GET[$parameterName];
        }
    }

    return NULL;
}

/**
 * Checks if requests got any POST data.
 *
 * @return bool Returns TRUE if request has some POST data.
 */
function hasAnyPOST() {
    return count($_POST) > 0;
}

/**
 * Checks if is some GET parameters sent in request.
 *
 * @return bool Returns TRUE if URL has some GET data.
 */
function hasAnyGET() {
    return count($_GET) > 0;
}
