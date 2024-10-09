<?php include_once "src/Core/Cresto.php"; $start = microtime(true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php renderHeaders(); ?>
    <title>Cresto - Default page title</title>
    <link rel="shortcut icon" href="/src/Assets/images/icons/favicon.ico" type="image/x-icon">
</head>
<body>
<?php if (!renderBody()) redirectTo("/404"); ?>
</body>
</html>
<?php echo "<!-- Page successfully rendered in: " . (number_format(((microtime(true) - $start) * 1000), 2)) . " ms -->"; ?>