<?php
namespace App\Models;
use Connection;
use QueryBuilder;
class Task
{
    // Propietats
    public $name;
    public $completed;

    /**
     * Task constructor.
     * @param $name
     * @param $completed
     */
    public function __construct($name = '', $completed=false)
    {
        $this->name = $name;
        $this->completed = $completed;
    }

    // ENCAPSULAR
    public function complete()
    {
        $this->completed = true;
    }

    public static function all()
    {
//        $pdo = Connection::connect();
//        return QueryBuilder::fetchAll($pdo,'Tasks');
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'tasks');
    }

    static function create($table, $cols){
        $pdo = Connection::connect();
        QueryBuilder::insert($pdo,$table,$cols);
    }
}