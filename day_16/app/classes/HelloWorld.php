<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $x,$y,$z,$item,$value,$datum;
    public $data = []; // array declare korar niom.
    public $student = [];

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index()
    {
//        echo  $this->message;

//        $this->x=10;
//        $this->y=20;
//        $this->z= $this->x + $this->y;

//        if($this->x > $this->y)
//        {
//            echo $this->z;
//        }
//        else
//        {
//            echo "Hello world";
//        }

//        if($this->x > $this->y)
//        {
//            echo $this->x;
//        }
//        elseif($this->y > $this->z)
//        {
//            echo $this->y;
//        }
//        elseif($this->z > $this->x)
//        {
//            echo $this->z;
//        }
//        else{
//            echo 'nothing';
//        }

//        switch ($this->x)
//        {
//            case 10:
//                echo "hello world";
//                break;
//            case 20:
//                echo "hello bangladesh";
//                break;
//            case 30:
//                echo "hello dhaka";
//                break;
//            default:
//                echo "nothing";
//        }

//        for($this->x = 100; $this->x <= 200; $this->x++)
//        {
//            echo $this->x ."<br/>";
//        }

        // 40 theke 20 porjonto print korar niom
//
//        for($this->x = 40; $this->x >= 20; $this->x--)
//        {
//            echo $this->x . "<br/>";
//        }

//        $this->x = 100;
//        while($this->x < 110)
//        {
//            echo $this->x."<br/>";
//            $this->x++;
//        }

//        $this->x = 10;
//        do
//        {
//            echo $this->x."<br/>";
//            $this->x++;
//        }while($this->x > 15);

//        $this->data = [10,20,30,40,50,"BASIS","SEIP","BITM",10.5,true];
//        var_dump($this->data);
//        echo $this->data[4];
//
//        foreach ($this->data as $this->x => $this->item) // $this->x = index number.
//        {
//            echo $this->item.'<br/>';
//        }

//        $this->student = [
//            'name'=>'sarkermajid',
//            'email'=>'sarkermajid@gmail.com',
//            'phone'=>'112743836'
//        ];
//        echo $this->student['name'];

        $this->student = [
            0 => [
                'name'=>'sarker majid',
                'email'=>'sarkermajid@gmail.com',
                'phone'=>[
                    'personal'=>'75934857',
                    'guardian'=>'47598042'
                ]
            ],
            1 => [
                'name'=>'sohan khan',
                'email'=>'sohankhan@gmail.com',
                'phone'=>[
                    'personal'=>'487908324',
                    'guardian'=>'75897024'
                ]
            ],
            2 => [
                'name'=>'tareq alam',
                'email'=>'tareq@gmail.com',
                'phone'=>[
                    'personal'=>'970709780980',
                    'guardian'=>'759345780345'
                ]
            ],
            3 => [
                'name'=>'tanvir',
                'email'=>'tanvir@gmail.com',
                'phone'=>[
                    'personal'=>'78509347853'
                ]
            ],
            4 => 'jubayer',
        ];

//        echo $this->student[0]['name']."<br/>".$this->student[0]['email']."<br/>".$this->student[0]['phone'];

//        foreach ($this->student as $this->item)
//        {
//            echo $this->item['name'];
//        }

        foreach ($this->student as $this->item) //4
        {
            if(is_array($this->item))
            {
                foreach ($this->item as $this->value) //12
                {
                    if(is_array($this->value))
                    {
                        foreach ($this->value as $this->datum) //8
                        {
                            echo $this->datum;
                        }
                    }
                    else{
                        echo $this->value.' ';
                    }
                }
            }else{
                echo $this->item;
            }
            echo "<br/>";
        }
        echo '<pre>';
        var_dump($this->student);
        print_r($this->student);
    }
}