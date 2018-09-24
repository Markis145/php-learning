<?php

require 'vendor/autoload.php';
//$database =
require 'framework/bootstrap.php';

//FC --> Front Controller -> un sol fitxer PHP (index.php) executa tota l'aplicació
// Sempre s'executa primer index.php

// URI
// tasks --> require 'views/tasks.blade.php'
// people --> require 'views/people.blade.php'
// ROUTER per URI



//Dos opcions:
// - Funció global
//var_dump()
require direct($_SERVER['REQUEST_URI']);

//require Router::direct($_SERVER['REQUEST_URI']);
// - Mètode dins d'una classe (funció dins d'una classe el seu nom tècnic es mètode)
//$router = new Router();
//require $router ->direct($uri);

//require Route::direct($uri);