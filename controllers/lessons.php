<?php

//$database = require 'framework/bootstrap.php';
//require 'models/Person.php';
//$people = $database->selectAll('people');
//require 'views/people.blade.php';
//
$lessons = Lesson::all();
//$tasks = $database->selectAll('tasks');
require view('lessons',$lessons);
//require 'views/tasks.blade.php';
