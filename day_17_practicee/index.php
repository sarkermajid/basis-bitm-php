<?php

require_once "vendor/autoload.php";

use App\classes\HelloWorld;
use App\classes\Home;

$helloWorld = new HelloWorld();
$helloWorld->index();

$home = new Home();
$home->index();