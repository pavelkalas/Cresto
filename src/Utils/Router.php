<?php

function setDefaultRoutingPage($defaultPage) {
    define("DEFAULT_ROUTING_PAGE", $defaultPage);
}

function getDefaultRoutingPage() {
    return constant("DEFAULT_ROUTING_PAGE");
}

setDefaultRoutingPage("home");