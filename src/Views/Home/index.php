
<?php

/* include model code */
include_once "src/Models/NameHandler.php";

/* get name from URL */
getName();

/* get NAME variable from model */
global $NAME;

?>

<div class="sample-element">
    <img src="/src/Assets/images/logo.png" alt="Cresto logo" width="128" height="128">

    <?php if ($NAME != NULL): ?>
        <h1>Hello, <?php echo $NAME; ?>!</h1>
    <?php else: ?>
        <h1>Hello, World!</h1>
    <?php endif; ?>

    <p>This is just sample page created in Cresto PHP framework.</p>

    <br>

    <form action="<?php echo getViewUrl("home"); ?>" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name.." <?php if ($NAME != NULL) { echo "value='" . $NAME . "'"; } ?> autofocus>
        <input type="submit" value="Send">
    </form>

    <span style="color: yellow; font-style: italic; margin-top: 80px;">
        Powered by <a href="https://github.com/pavelkalas/Cresto.git" target="_blank" style="color: whitesmoke; text-decoration: none; font-weight: bold;">Cresto</a> PHP framework.
    </span>
</div>
