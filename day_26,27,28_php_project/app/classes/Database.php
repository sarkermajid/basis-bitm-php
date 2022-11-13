<?php


namespace App\classes;


class Database
{
    private $hostname;
    private $username;
    private $password;
    private $databaseName;
    private $link;

    public function __construct()
    {
        $this->hostname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->databaseName = 'php_project';
    }

    public function dbConnect()
    {
        $this->link = mysqli_connect($this->hostname, $this->username, $this->password, $this->databaseName);
        return $this->link;
    }


}