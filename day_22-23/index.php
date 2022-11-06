<?php

require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\User;

//$home=new Home();
//$home->index();

$user = new User();
echo $user->getEmail();