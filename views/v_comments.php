<hr>

<form method="post" class="comment_form">
    Ваше имя:
    <input type="text" name="comment_author" value="">
    <textarea name="comment_text" cols="30" rows="10"></textarea>
    <br>
    <input type="submit">
</form>
<h3>Предыдущие комментари:</h3>

<?php

foreach ($vars as $comment):
?>
<div class="comment">
    <h3><?= $comment['author'] ?></h3>
    <span><?= $comment['date'] ?></span>
    <p><?= $comment['comment'] ?></p>
</div>

<?php
endforeach;