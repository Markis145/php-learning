<?php
/**
 * Created by PhpStorm.
 * User: marcmestre
 * Date: 1/10/18
 * Time: 15:01
 */

class PagesController
{
    public function tasks()
    {
        $tasks = Task::all();

        require view('tasks');
    }

    public function people()
    {
        $people = Person::all();

        require view('people');
    }

    public function lessons()
    {
        $lessons = Lesson::all();

        require view('lessons');
    }

    public function about()
    {
        require view('about');
    }

    public function contact()
    {
        require view('contact');
    }
    
}