<?php
class Connection {
    public static function connect()
    {
        try {
            return new PDO(
                'mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','BSjmuIoMvRww9AMl'

//                $config['connection'].';dbname='.$config['name'],
//                $config['username'],
//                $config['password']
            );
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}