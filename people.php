<?php

$database = require 'framework/bootstrap.php';
require 'models/Person.php';
$people = $database->selectAll('people');
require 'views/people.blade.php';

