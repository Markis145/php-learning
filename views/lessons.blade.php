<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
<!--ul>li*5-->

<!-- NO HTML5 -->
<!--SEMÀNTICA -->

<nav>
    <ul>
        <li><a href="/tasks">Tasques</a></li>
        <li><a href="/people">Persones</a></li>
        <li><a href="/lessons">Lliçons</a></li>
        <li><a href="/contact">Contacte</a></li>
        <li><a href="/about">Sobre nosaltres</a></li>
    </ul>
</nav>
<ul>
    <?php foreach ($lessons as $lesson) : ?>
    <li>
        Nom: <?= $lesson->name; ?>
    </li>
    <?php endforeach;?>
</ul>

</body>
</html>