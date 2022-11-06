<?php


namespace App\classes;


class WordStringCount
{
    public $getMessage,$getWord,$getString;

    public function __construct($post)
    {
        $this->getMessage = $post['get_message'];
    }

    public function wordCount()
    {
        $this->getWord = str_word_count($this->getMessage);
        return $this->getWord;
    }

    public function stringCount()
    {
        $this->getString = strlen($this->getMessage);
        return $this->getString;
    }

}