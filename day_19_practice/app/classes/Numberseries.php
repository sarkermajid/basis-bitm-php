<?php


namespace App\classes;


class Numberseries
{

    public $startNumber,$endNumber,$result;

    public function __construct($post)
    {
        $this->startNumber = $post['start_number'];
        $this->endNumber = $post['end_number'];
    }

    public function getNumberSeries()
    {
        for($this->startNumber; $this->startNumber <= $this->endNumber; $this->startNumber++)
        {
            $this->result.=$this->startNumber.' ';
        }
        return $this->result;
    }
}