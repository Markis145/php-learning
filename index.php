<?php

require 'vendor/autoload.php';
//$database =
require 'framework/bootstrap.php';

require Router::direct($_SERVER['REQUEST_URI']);


//MVC: model vista controlador -> Paradigma / patró disseny