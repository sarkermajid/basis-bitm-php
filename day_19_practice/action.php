<?php

require_once 'vendor/autoload.php';
use App\classes\Fullname;
use App\classes\Calculator;
use App\classes\Numberseries;
$result = '';

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'full-name')
    {
        include 'pages/fullname.php';
    }
    elseif($_GET['page'] == 'calculator')
    {
        include "pages/calculator.php";
    }
    elseif ($_GET['page'] == 'number-series')
    {
        include 'pages/numberseries.php';
    }

}
elseif (isset($_POST['cal_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}
elseif(isset($_POST['full_name_btn']))
{
    $fullName = new Fullname($_POST);
    $result = $fullName->getFullName();
    include 'pages/fullname.php';
}
elseif(isset($_POST['number-series']))
{
    $numberSeries = new Numberseries($_POST);
    $result = $numberSeries->getNumberSeries();
    include 'pages/numberseries.php';
}
else
{
    include 'pages/home.php';
}