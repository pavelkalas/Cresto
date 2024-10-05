<?php

/**
 * Shows a error on page.
 *
 * @param $message Error message.
 * @return string Returns an complete ERROR page.
 */
function showError($message) {
    return "<div class='cresto-error'><p style='font-size: 25px;'>Exception thrown!</p> <p>An exception were throwed:</p> <pre>$message</pre> </div>";
}
