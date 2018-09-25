<?php require 'partials/header.blade.php' ?>
<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        Nom: <?= $person->name; ?>
        | Dni: <?= $person->dni; ?>
        | Altura: <?= $person->height; ?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
