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

    // ENCAPSULAR
//    public function complete()
//    {
//        $this->completed = true;
//    }
}