<?php

if (!function_exists('view')){
    function view($view) {
        return "views/$view.blade.php";
    }
}
//function view($view){
//    return "views/$view.blade.php";
//}
////    routes.php
//function direct($uri){
//    $routes = [
//      '/' => 'controllers/tasks.php',
//      '/tasks' => 'controllers/tasks.php',
//      '/people' => 'controllers/people.php',
//      '/lessons' => 'controllers/lessons.php',
//      '/about' => 'controllers/about.php',
//      '/contact' => 'controllers/contact.php',
//    ];
//// Route::define('tasks',
//    if (array_key_exists($uri,$routes)) {
//        return $routes[$uri];
//    } else {
//        new Exception('La pàgina web que demaneu no existeix');
//    }
//
//}