<?php


namespace App\classes;


class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [
                "id"=>1,
                "image"=>"assets/img/person4.jpg",
                "name"=>"Sarker Majid",
                "roll"=>'17798',
                "profession"=>"Laravel Developer",
                "about_me"=>"Hi, I'm a computer science & engineer graduate and Full stack web developer and Laravel Developer.I Design and Develop top quality, user-friendly and responsive custom websites. I'm skilled at HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, Laravel and MySQL.I'm passionate about coding and I'm fully capable of providing reliable & great quality work.",
                "phone"=>"75697593",
            ],
            1=>[
                "id"=>2,
                "image"=>"assets/img/person1.jpg",
                "name"=>"Nasir Ahmed",
                "roll"=>'15898',
                "profession"=>"Web Developer",
                "about_me"=>"Hi, I'm a computer science & engineer graduate and Full stack web developer and Laravel Developer.I Design and Develop top quality, user-friendly and responsive custom websites. I'm skilled at HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, Laravel and MySQL.I'm passionate about coding and I'm fully capable of providing reliable & great quality work.",
                "phone"=>"75697593",
            ],
            2=>[
                "id"=>3,
                "name"=>"Irfan azad",
                "image"=>"assets/img/person2.jpg",
                "roll"=>'12198',
                "profession"=>"Web Designer",
                "about_me"=>"Hi, I'm a computer science & engineer graduate and Full stack web developer and Laravel Developer.I Design and Develop top quality, user-friendly and responsive custom websites. I'm skilled at HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, Laravel and MySQL.I'm passionate about coding and I'm fully capable of providing reliable & great quality work.",
                "phone"=>"75697593",
            ],
            3=>[
                "id"=>4,
                "name"=>"Asif Khan",
                "image"=>"assets/img/person3.jpg",
                "roll"=>'19798',
                "profession"=>"WordPress Developer",
                "about_me"=>"Hi, I'm a computer science & engineer graduate and Full stack web developer and Laravel Developer.I Design and Develop top quality, user-friendly and responsive custom websites. I'm skilled at HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, Laravel and MySQL.I'm passionate about coding and I'm fully capable of providing reliable & great quality work.",
                "phone"=>"75697593",
            ]
        ];
    }

    public function getStudent()
    {
        return $this->students;
    }

    public function getStudentDetails($id)
    {
        foreach ($this->students as $student)
        {
            if($student['id'] == $id)
            {
                return $student;
            }
        }
    }
}