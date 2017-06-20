<!-------------------ФОРМА РЕДАКТИРОВАНИЯ СТАТЬИ------------------------------------------>
<form method="post">
    Заголовок: <input type="text" name="caption" value="<?=$caption ?>">
    <br>
    Автор: <input type="text" name="author" value="<?=$author ?>">

    <br>
    <textarea name="text"><?=$text ?></textarea>
    <br>
    <input type="submit">
</form>