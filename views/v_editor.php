
<a href="index.php?a=new"><h3>>>> Новая статья <<<</h3></a>
<hr>
<?php

//------------------ Выводим статьи --------------------------------
foreach ($vars as $article):
    ?>
    <a href="index.php?id=<?=$article['id']?>&a=show">
        <h2><?php echo $article['caption'] ?></h2>
    </a>
    <a href="index.php?id=<?=$article['id']?>&a=edit">Редактировать</a>
    <a href="index.php?id=<?=$article['id']?>&a=delete">Удалить</a>
    <hr>
    <?php
endforeach;
