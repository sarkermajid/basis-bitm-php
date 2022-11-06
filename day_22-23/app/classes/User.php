<?php


namespace App\classes;


class User
{
    public $email;
    protected $password;
    private $userType;


    public function __construct()
    {
        $this->email = 'user@gmail.com';
        $this->password = '12345';
        $this->userType = 'admin';
    }

    public function getEmail()
    {
        return $this->email;
    }

    protected function getUserType()
    {
        return $this->userType;
    }

    private function getPassword()
    {
        return $this->password;
    }

}