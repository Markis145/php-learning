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
<!--
<ul>
@foreach ($tasks as $task)
    <li>
@if ($task->completed == true)
        <strike>
@endif
    {{ $task->name }}
    @if ($task->completed == true)
        </strike>
@endif
            </li>
@endforeach
        </ul>
-->

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