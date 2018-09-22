<?php

$database = require 'framework/bootstrap.php';
require 'models/Task.php';
//$tasks = Task::all();
$tasks = $database->selectAll('tasks');
require 'views/tasks.blade.php';
