<?php

$tasks = Task::all();
//$tasks = $database->selectAll('tasks');
require view('tasks');
//require 'views/tasks.blade.php';
