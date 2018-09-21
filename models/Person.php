<?php

class Person
{
    // Propietats
    public $name;
    public $dni;
    public $height;

    /**
     * Task constructor.
     * @param $name
     * @param $dni
     * @param $height
     */
    public function __construct($name = '', $dni = 0, $height= 0)
    {
        $this->name = $name;
        $this->dni = $dni;
        $this->height = $height;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'people');
    }
}