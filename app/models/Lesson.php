<?php

namespace App\Models;
use Connection;
use QueryBuilder;

class Lesson
{
    // PROPIETATS
    public $name;
    /**
     * Lesson constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'lessons');
    }
}