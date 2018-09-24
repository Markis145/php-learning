<?php

$tasks = Task::all();
//$tasks = $database->selectAll('tasks');
require view('tasks',$tasks);
//require 'views/tasks.blade.php';
