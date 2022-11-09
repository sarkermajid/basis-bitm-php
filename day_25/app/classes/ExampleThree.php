<?php


namespace App\classes;


trait ExampleThree
{
    public $x;
    public $y;

    public function display()
    {
        $this->x = 10;
        $this->y = 20;
        echo $this->x + $this->y;
    }
}