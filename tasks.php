<?php

require 'models/Task.php';

//new Task();

//$task1=['name' => 'comprar pa', 'completed' => false];
//$task2=['name' => 'comprar let', 'completed' => false];
//$task3=['name' => 'fer el llit', 'completed' => true];
//$tasks=[$task1,$task2,$task3];

$tasks = [
    new Task('Comprar pa', false ),
    new Task('Comprar llet', true ),
    new Task('fer el llit', false ),
    ];


require 'views/tasks.blade.php';