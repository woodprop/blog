<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main_container">
    <header>
        <h1>BloG FrameworK</h1>
    </header>
<menu>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="index.php?a=editor">Уголок редактора</a></li>
    </ul>
</menu>

<?=$content?>

<footer><span>Konstantin Kokarev &copy; 2017</span></footer>
</div>
</body>
</html>