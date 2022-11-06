<?php

require_once 'vendor/autoload.php';
use App\classes\Registration;

$home = new Registration();
$home->index();