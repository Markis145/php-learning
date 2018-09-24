<?php

class QueryBuilder
{
//    protected $pdo;
//
//    public function __construct($pdo)
//    {
//        $this -> pdo = $pdo;
//    }

    public static function fetchAll($connection, $table)
    {
        $statement = $connection->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
//    public function selectAll($table){
//        $statement = $this -> pdo -> prepare("select * from {$table}");
//        $statement -> execute();
//        return $statement->fetchAll(PDO::FETCH_CLASS);
//    }

}