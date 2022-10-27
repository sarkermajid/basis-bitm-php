<?php


namespace App\classes;


class ArrayGame
{
    public $students = [];
    public $item,$item2,$item3,$item4;

    public function index()
    {
        $this->students = [
            0 => [
                "name" => "Sarker Majid",
                "email"=> "sarkermajid@gmail.com",
                "address"=>"dhaka",
                "phone"=>[
                    "personal"=>"79234573287",
                    "guardian"=>"6943873294"
                ],
                "friends"=>[
                    "sohan_khan"=>[
                        "profession"=>"Laravel Developer",
                        "address" => "Basabo, Dhaka"
                    ]
                ]
            ],
            1 => [
                "name" => "tareq alam",
                "email"=> "tareqalam@gmail.com",
                "address"=>"comilla",
                "phone"=>[
                    "personal"=>"74293478",
                    "guardian"=>"4643287687432"
                ],
                "friends"=>[
                    "tanvir"=>[
                        "profession"=>"Data Developer",
                        "address" => "jatrabari, Dhaka"
                    ]
                ],
                "username"=>"tareq-ul-alam"
            ],
        ];

        foreach ($this->students as $this->item)
        {
            if(is_array($this->item))
            {
                foreach ($this->item as $this->item2)
                {
                    if(is_array($this->item2))
                    {
                        foreach ($this->item2 as $this->item3)
                        {
                            if(is_array($this->item3))
                            {
                                foreach ($this->item3 as $this->item4)
                                {
                                    echo $this->item4;
                                    echo "<br/>";
                                }
                            }
                        }
                    }
                    else
                    {
                        echo $this->item2;
                    }
                }
            }
            else
            {
                echo $this->item;
            }
        }

    }
}