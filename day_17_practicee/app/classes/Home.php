<?php


namespace App\classes;


class Home
{
    public $data = [];


    public function index()
    {
        header("Location: action.php?page=home");
    }

    public function studentInformation()
    {
        $this->data = [
            0=>[
                'id'=>1,
                'name'=>'sarker majid',
                'profession'=>'Laravel Developer',
                'mobile'=>'72873234230'
            ],
            1=>[
                'id'=>2,
                'name'=>'sohan khan',
                'profession'=>'python Developer',
                'mobile'=>'72873234230'
            ],
            2=>[
                'id'=>3,
                'name'=>'Tareq alam',
                'profession'=>'Web Designer',
                'mobile'=>'72873234230'
            ],
            3=>[
                'id'=>4,
                'name'=>'tanvir ahmed',
                'profession'=>'Data Developer',
                'mobile'=>'72873234230'
            ],
        ];
        return $this->data;
    }
}