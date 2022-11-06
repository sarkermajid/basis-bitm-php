<?php


namespace App\classes;


class Fullname
{
    public $firstName;
    public $lastName;

    public function __construct($post)
    {
        $this->firstName = $post['f_name'];
        $this->lastName = $post['l_name'];
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}