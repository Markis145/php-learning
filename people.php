<?php

require 'framework/bootstrap.php';
require 'models/Person.php';
//require 'framework/database/connect.php';
//require 'framework/database/queryBuilder.php';

//$tasks = Task::all();
$people = Person::all();
//$pdo = connect();
//$people=fetchAll($pdo,'people');

require 'views/people.blade.php';