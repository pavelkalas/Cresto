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