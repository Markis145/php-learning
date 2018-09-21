<?php

require 'models/Task.php';
require 'framework/database/Connection.php';
require 'framework/database/QueryBuilder.php';

//new Task();

//estatiques
$pdo = Connection::connect();
$tasks = QueryBuilder::fetchAll($pdo,'tasks');

require 'views/tasks.blade.php';