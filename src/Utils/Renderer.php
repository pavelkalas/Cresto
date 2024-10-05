<?php

/**
 * Importing all imports
 */
include_once "src/Core/Imports.php";

$routePath = NULL;

$sectionsPath = "src/Views/";

if (isset($_GET["route"])) {
    $routePath = trim($_GET["route"]);
} else {
    $routePath = getDefaultRoutingPage();
}

/**
 * Renders a Section Headers to BODY in Layout.php
 *
 * @return bool Returns if rendering was successfull or not.
 */
function renderHeaders()
{
    global $routePath, $sectionsPath;

    if ($routePath != NULL) {
        $sectionPath = $sectionsPath . $routePath . "/";

        if (is_dir($sectionPath)) {
            if (file_exists($sectionPath . "headers.php")) {
                echo "<!-- rendering headers to template. -->";
                include $sectionPath . "headers.php";
                echo "<!-- END -->";
                return TRUE;
            }
        }
    }

    return FALSE;
}

/**
 * Renders a Section content to BODY in Layout.php
 *
 * @return bool Returns if rendering was successfull or not.
 */
function renderBody()
{
    global $routePath, $sectionsPath;

    if ($routePath != NULL) {
        $sectionPath = $sectionsPath . $routePath . "/";

        if (is_dir($sectionPath)) {
            if (file_exists($sectionPath . "index.php")) {
                echo "<!-- rendering body content to template. -->";
                include $sectionPath . "index.php";
                echo "<!-- END -->";
                return TRUE;
            }
        }
    }

    return FALSE;
}
