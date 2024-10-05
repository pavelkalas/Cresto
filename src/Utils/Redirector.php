<?php

/**
 * @param $url URL which redirects user to another page.
 *
 * @return void
 */
function redirectTo($url) {
    header("Location: $url");
    exit;
}

/**
 * Gets a PATH for View route URL.
 *
 * @param $viewName View name.
 *
 * @return string Returns view URL.
 */
function getViewUrl($viewName) {
    return "/?route=$viewName";
}
