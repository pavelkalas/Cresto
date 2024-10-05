<?php

/**
 * @param $defaultPage Default routing URL if is not defined in URL.
 *
 * @return void
 */
function setDefaultRoutingPage($defaultPage) {
    define("DEFAULT_ROUTING_PAGE", $defaultPage);
}

/**
 * @return mixed Returns default routing page if not defined in URL.
 */
function getDefaultRoutingPage() {
    return constant("DEFAULT_ROUTING_PAGE");
}

// set default page to "home"
setDefaultRoutingPage("home");
