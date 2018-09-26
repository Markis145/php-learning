<?php

require 'vendor/autoload.php';
//$database =
require 'framework/bootstrap.php';

Router::direct($_SERVER['REQUEST_URI']);


//MVC: model vista controlador -> Paradigma / patró disseny