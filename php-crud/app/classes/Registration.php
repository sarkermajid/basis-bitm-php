<?php


namespace App\classes;


class Registration
{
    public function index()
    {
        header("Location: action.php?page=registration");
    }
}