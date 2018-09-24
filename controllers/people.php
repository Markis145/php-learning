<?php

//$database = require 'framework/bootstrap.php';
//require 'models/Person.php';
//$people = $database->selectAll('people');
//require 'views/people.blade.php';
//
$people = Person::all();
//$tasks = $database->selectAll('tasks');
require view('people',$people);
//require 'views/tasks.blade.php';
