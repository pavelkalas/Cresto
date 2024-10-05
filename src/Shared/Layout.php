<?php

include_once "src/Core/Cresto.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <?php renderHeaders(); ?>
</head>
<body>
    <?php $state = renderBody();

    if (!$state) {
        redirectTo("/?route=404");
    }

    ?>
</body>
</html>