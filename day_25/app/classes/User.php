<?php


namespace App\classes;


class User
{

    public $email = 'admin@gmail.com';
    protected $password = '12345';
    private $userType = 'admin';
    public static $name = 'Bitm';


    public function __construct()
    {

    }

    public function index()
    {
        echo self::$name;
    }

    protected function create()
    {
        echo 'in create';
    }

    private function manage()
    {
        echo 'in manage';
    }

    public static function hello()
    {
        echo 'hai hello';
    }
}