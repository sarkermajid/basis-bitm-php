<?php


namespace App\classes;


class Home
{
    public $message;
    public $data = [];

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index()
    {
        header("Location: action.php?page=home");
    }

    public function studentInfo()
    {
        $this->data = [
            0 =>[
                'id'=>1,
                'name'=>'sarker majid',
                'profession'=>'Web Developer',
                'mobile'=>'75897520342'
            ],
            1 => [
                'id'=>2,
                'name'=>'sohan khan',
                'profession'=>'web designer',
                'mobile'=>'753489573890'
            ],
            2=>[
                'id'=>3,
                'name'=>'tareq alam',
                'profession'=>'graphics designer',
                'mobile'=>'75893457'
            ],
            3=>[
                'id'=>4,
                'name'=>'tanvir khan',
                'profession'=>'data science',
                'mobile'=>'7893445345'
            ]
        ];
        return $this->data;
    }
}