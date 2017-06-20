
<?php

//------------------ Выводим статьи --------------------------------
foreach ($vars as $article):
    ?>
    <a href="index.php?id=<?=$article['id']?>&a=show">
        <h2><?php echo $article['caption'] ?></h2>
    </a>
    <h3>Автор: <?php echo $article['author'] ?></h3>
    <p><?php echo $article['text'] ?></p>
    <?php
endforeach;
