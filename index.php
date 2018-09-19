<?php

require 'functions.php';

//var_dump($_GET);
//die();

//String -> $greeting='Hola';
//Booleans -> $x = true/false;
//Enter -> $num = 15;

//Array/Vector

//$fruites = array();
//$fruites = [];

//Normal array
//$str = 'platan';
//$str1 = 'presec';
//$str2 = 'taroja';
//
//$fruites = [$str, $str1, $str2];
//
//echo $fruites[0];
//die();

//Array associatiu

//$person="Marc Mestre Alguero";

//$person = [
//    'name' => 'Marc Mestre Alguero',
//    'dni' => '123123123K',
//    'mobile' => '12358125'
//];

$greeting=hello($_GET['greeting']);

require 'views/index.blade.php';
