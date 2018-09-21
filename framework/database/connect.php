<?php

function connect(){
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','BSjmuIoMvRww9AMl');
    } catch (\PDOException $e){
        die('Could not connect' . $e);
    }
}