<?php

use PHPUnit\Framework\TestCase;

require '../models/Task.php';

class HelloWorldTest extends TestCase
{
    /**
     * @test
     */
    public function testTaskClass()
    {
        $task = new Task();
        $this->assertInstanceOf(Task::class,$task);
    }
    /**
     * @test
     */
    public function can_create_a_task_with_a_name()
    {
        $task = new Task('comprar pa');

        // PROPIETATS
        $this->assertEquals('Comprar pa',$task->name);


        //Array associatiu
        // $task['name']
    }

    /**
     * @test
     */
    public function can_create_a_task_with_an_status()
    {
        $task = new Task('Comprar pa', false);

        // PROPIETATS
        $this->assertEquals('Comprar pa',$task->name);
        $this->assertEquals(false,$task->completed);

        //Array associatiu
        // $task['name']
    }
    /**
     * @test
     */
    public function can_complete_a_task()
    {
        //1 Prepare
        $task = new Task('comprar pa', false);

        //2 executar
        $task->complete();

        $this->assertEquals(true,$task->completed);
    }

    /**
     * @test
     */
    public function tasks ()
    {
        // 1) Preparar 2) Executar 3) Assert
        require_once('../tasks.php');

    }


}

