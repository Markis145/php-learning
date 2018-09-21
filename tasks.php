<?php

require 'models/Task.php';

//new Task();

//$task1=['name' => 'comprar pa', 'completed' => false];
//$task2=['name' => 'comprar let', 'completed' => false];
//$task3=['name' => 'fer el llit', 'completed' => true];
//$tasks=[$task1,$task2,$task3];


require 'framework/database/connect.php';

$pdo=connect();
$tasks=fetchAll('tasks');

//try {
//    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','BSjmuIoMvRww9AMl');
//} catch (\PDOException $e){
//    die('Could not connect');
//}

//Consulta SQL -> STATEMENT SQL
$statement = $pdo->prepare('SELECT * FROM tasks;');
$statement->execute();

//$results = $statement->fetchAll(PDO::FETCH_CLASS,Task::class);


$tasks = $statement->fetchAll(PDO::FETCH_CLASS);


//$tasks = [
//    new Task('Comprar pa', false ),
//    new Task('Comprar llet', true ),
//    new Task('fer el llit', false ),
//];

require 'views/tasks.blade.php';