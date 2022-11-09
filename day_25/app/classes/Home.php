<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleThree;

class Home extends User implements ExampleOne

{

    use ExampleThree;
    public $message ;

    public function __construct()
    {
        $this->message = "hello";
        $this->email = 'sarker@gmai.com';
    }

    public function test()
    {
        echo  $this->index();
    }

    public static function demo()
    {
        User::hello();
    }

    public function one()
    {
        $this->display();
    }

    public function two()
    {
         echo 'In one';
    }

    public function three()
    {
        echo 'In one';
    }

    public function index()
    {
        header('location: action.php?page=home');
    }

}