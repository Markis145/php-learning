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

<nav>
    <ul>
        <li><a href="/controllers/tasks.php">Tasques</a></li>
        <li><a href="/controllers/people.php">Persones</a></li>
        <li><a href="/controllers/lessons.php">Lliçons</a></li>
        <li><a href="/controllers/contact.php">Contacte</a></li>
        <li><a href="/controllers/about.php">Sobre nosaltres</a></li>
    </ul>
</nav>

<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        Nom: <?= $person->name; ?>
        | Dni: <?= $person->dni; ?>
        | Altura: <?= $person->height; ?>
    </li>
    <?php endforeach;?>
</ul>


</body>
</html>