<?php

namespace App\classes;


class HelloWorld
{
    public $first_name;
    public $last_name;
    public $x,$y,$z;

    public function __construct()
    {

    }

    public function index()
    {

        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//        echo ($this->x > $this->y) && ($this->y > $this->z); // 0
//        echo "<br/>";
//        echo ($this->x < $this->z) && ($this->y < $this->z); // 1
//        echo "<br/>";
//        echo ($this->x > $this->y) && ($this->y < $this->z); // 0
//        echo "<br/>";
//        echo ($this->x < $this->y) && ($this->y > $this->z); // 0
//        echo "<br/>";


//        echo $this->x > $this->y;
//        echo "<br/>";
//        echo $this->x < $this->y;

//        echo $this->x += $this->y; // $this->x = $this->x + $this->y
//        echo "<br/>";
//        echo $this->x -= $this->y;
//        echo "<br/>";
//        echo $this->x *= $this->y;
//        echo "<br/>";
//        echo $this->x /= $this->y;
//        echo "<br/>";
//        echo $this->x %= $this->y;
//        echo "<br/>";
//        echo $this->x .= $this->y;
//        echo "<br/>";

//        echo $this->x++;
//        echo "<br/>";
//        echo $this->x;

//        echo $this->x + $this->y;
//        echo "<br/>";
//        echo $this->x - $this->y;
//        echo "<br/>";
//        echo $this->x * $this->y;
//        echo "<br/>";
//        echo $this->x / $this->y;
//        echo "<br/>";
//        echo $this->x % $this->y;
//        echo "<br/>";

        $this->first_name="Sarker";
        $this->last_name="Majid";
//        echo $this->first_name ." &nbsp;". $this->last_name." ";
//        echo gettype($this->first_name);
    }

}