<?php


namespace App\classes;


class Employee
{
    public $employees = [];

    public function __construct()
    {
        $this->employees = [
            0=>[
                "id"=>1,
                "img"=>"assets/img/person1.jpg",
                "title"=>"Title one",
                "description"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."
            ],
            1=>[
                "id"=>2,
                "img"=>"assets/img/person4.jpg",
                "title"=>"Title two",
                "description"=>"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,"
            ],
            2=>[
                "id"=>3,
                "img"=>"assets/img/person3.jpg",
                "title"=>"Title three",
                "description"=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable."
            ],
        ];
    }

    public function getAllEmployee()
    {
        return $this->employees;
    }

    public function getSingleEmployee($id)
    {
        foreach ($this->employees as $employee)
        {
            if($employee['id'] == $id)
            {
                return $employee;
            }
        }
    }
}