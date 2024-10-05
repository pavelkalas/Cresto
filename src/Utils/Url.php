<?php

/**
 * GET parameter value by name.
 *
 * @param parameterName Parameter name.
 *
 * @return mixed|null Returns GET parameter value if exists.
 */
function urlGET($parameterName)
{
    $params = $_GET;

    if (isset($_GET)) {
        if (isset($params[$parameterName])) {
            return $params[$parameterName];
        }
    }

    return NULL;
}

/**
 * @return bool Returns TRUE if has request any GET parameters.
 */
function hasUrlGET()
{
    return $_GET != NULL;
}

/**
 * POST parameter value by name.
 *
 * @param parameterName Parameter name.
 *
 * @return mixed|null Returns POST parameter value if exists.
 */
function urlPOST($parameterName)
{
    $params = $_POST;

    if (isset($_POST)) {
        if (isset($params[$parameterName])) {
            return $params[$parameterName];
        }
    }

    return NULL;
}

/**
 * @return bool Returns TRUE if has request any POST parameters.
 */
function hasUrlPOST()
{
    return $_POST != NULL;
}

/**
 * Checks for existing POST parameter.
 *
 * @param parameterName Parameter name.
 * @param bool $ignoreEmpty Ignores empty values.
 *
 * @return bool Returns TRUE if is POST parameter set.
 */
function hasUrlSetPOST($parameterName, $ignoreEmpty = FALSE)
{
    return hasUrlPOST() && isset($_POST[$parameterName]) && !(trim($_POST[$parameterName]) == "" && $ignoreEmpty);
}

/**
 * Checks for existing GET parameter.
 *
 * @param parameterName Parameter name.
 * @param bool $ignoreEmpty Ignores empty values.
 *
 * @return bool Returns TRUE if is GET parameter set.
 */
function hasUrlSetGET($parameterName, $ignoreEmpty)
{
    return hasUrlGET() && isset($_GET[$parameterName]) && !(trim($_POST[$parameterName]) == "" && $ignoreEmpty);
}
