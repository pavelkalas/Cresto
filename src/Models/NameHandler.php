<?php

/*
 * THIS IS JUST SAMPLE MODEL FOR GETTING INPUTED NAME.
 */

/* getter/setter for INPUTED NAME */
$NAME = NULL;

/**
 * @return mixed|void|null  Returns NAME from URL as parameter GET, if exists.
 */
function getName()
{
    global $NAME;

    if (hasUrlPOST("name", true)) {
        $NAME = urlPOST("name");
    }
}
