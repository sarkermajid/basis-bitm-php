<?php


namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;
    private $password;
    private $link;
    private $sql;
    private $queryResult;
    private $data = [];
    private $i;
    private $row;

    public function __construct($data = null)
    {
        if($data)
        {
            $this->name             = $data['name'];
            $this->email            = $data['email'];
            $this->mobile           = $data['mobile'];
            $this->password         = md5($data['password']);
        }
    }

    public function save()
    {
        $this->link = mysqli_connect("localhost", "root", "", "bitm-php-crud");

        if($this->link)
        {
            $this->sql = "INSERT INTO students (name, email, mobile, password) VALUES         ('$this->name','$this->email','$this->mobile','$this->password')";
            if(mysqli_query($this->link, $this->sql))
            {
                return 'Student info save successfully';
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }
    }

    public function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost','root','',                 'bitm-php-crud');
        $this->sql = "SELECT * FROM students";
        if(mysqli_query($this->link, $this->sql))
        {
            $this->queryResult = mysqli_query($this->link, $this->sql);
            $this->i = 0;
            while($this->row = mysqli_fetch_assoc($this->queryResult))
            {
                $this->data[$this->i]['id']         = $this->row['id'];
                $this->data[$this->i]['name']       = $this->row['name'];
                $this->data[$this->i]['email']      = $this->row['email'];
                $this->data[$this->i]['mobile']     = $this->row['mobile'];
                $this->i++;
            }
            return $this->data;
        }
        else
        {
            die('Query problems..'.mysqli_error($this->link));
        }
    }

    public function delete($id)
    {
        $this->link = mysqli_connect('localhost','root','','bitm-php-crud');
        $this->sql = "DELETE FROM students WHERE id = '$id'";
        if(mysqli_query($this->link, $this->sql))
        {
            return 'Student info Deleted';
        }
        else
        {
            die(mysqli_error($this->link));
        }
    }

    public function getStudentInfoById($id)
    {
        $this->link = mysqli_connect('localhost','root','','bitm-php-crud');
        $this->sql  = "SELECT * FROM students WHERE id = '$id'";
        $this->queryResult = mysqli_query($this->link, $this->sql);
        return mysqli_fetch_assoc($this->queryResult);
    }

}