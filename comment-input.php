<?php require ''; ?>

//input method
<p>write your message</p>
<form action="comment-output.php" method="post">
    <input type="text" name="message">
    <input type="submit" value="send">
</form>

<?php require ''; ?>