<div class="sample-element">
    <?php if (hasUrlSetPOST("name", true)): ?>
        <h1>Hello, <?php echo urlPOST("name"); ?>!</h1>
    <?php else: ?>
        <h1>Hello, World!</h1>
    <?php endif; ?>

    <p>This is just sample page created in Cresto PHP framework.</p>

    <br>

    <form action="/?route=home" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name.." <?php if (hasUrlSetPOST("name", true)) { echo "value='" . urlPOST("name") . "'"; } ?> autofocus>
        <input type="submit" value="Send">
    </form>
</div>
