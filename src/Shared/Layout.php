<?php include_once "src/Core/Cresto.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php renderHeaders(); ?>
    <title>Cresto - Default page title</title>
</head>
<body>
<?php if (!renderBody()) redirectTo("/?route=404"); ?>
</body>
</html>